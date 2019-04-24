<?php

namespace App\Services;

use Mpdf\HTMLParserMode;

class Mpdf extends \Mpdf\Mpdf
{
    /** @var array */
    public $replaces = [];

    public $form;

    // Page footer
    final function Footer()
    {
        /* -- CSS-PAGE -- */
        // PAGED MEDIA - CROP / CROSS MARKS from @PAGE
        if ($this->show_marks == 'CROP' || $this->show_marks == 'CROPCROSS') {
            // Show TICK MARKS
            $this->SetLineWidth(0.1); // = 0.1 mm
            $this->SetDColor($this->colorConverter->convert(0, $this->PDFAXwarnings));
            $l = $this->cropMarkLength;
            $m = $this->cropMarkMargin; // Distance of crop mark from margin
            $b = $this->nonPrintMargin; // Non-printable border at edge of paper sheet
            $ax1 = $b;
            $bx = $this->page_box['outer_width_LR'] - $m;
            $ax = max($ax1, $bx - $l);
            $cx1 = $this->w - $b;
            $dx = $this->w - $this->page_box['outer_width_LR'] + $m;
            $cx = min($cx1, $dx + $l);
            $ay1 = $b;
            $by = $this->page_box['outer_width_TB'] - $m;
            $ay = max($ay1, $by - $l);
            $cy1 = $this->h - $b;
            $dy = $this->h - $this->page_box['outer_width_TB'] + $m;
            $cy = min($cy1, $dy + $l);

            $this->Line($ax, $this->page_box['outer_width_TB'], $bx, $this->page_box['outer_width_TB']);
            $this->Line($cx, $this->page_box['outer_width_TB'], $dx, $this->page_box['outer_width_TB']);
            $this->Line($ax, $this->h - $this->page_box['outer_width_TB'], $bx, $this->h - $this->page_box['outer_width_TB']);
            $this->Line($cx, $this->h - $this->page_box['outer_width_TB'], $dx, $this->h - $this->page_box['outer_width_TB']);
            $this->Line($this->page_box['outer_width_LR'], $ay, $this->page_box['outer_width_LR'], $by);
            $this->Line($this->page_box['outer_width_LR'], $cy, $this->page_box['outer_width_LR'], $dy);
            $this->Line($this->w - $this->page_box['outer_width_LR'], $ay, $this->w - $this->page_box['outer_width_LR'], $by);
            $this->Line($this->w - $this->page_box['outer_width_LR'], $cy, $this->w - $this->page_box['outer_width_LR'], $dy);

            if ($this->printers_info) {
                $hd = date('Y-m-d H:i') . '  Page ' . $this->page . ' of {nb}';
                $this->SetTColor($this->colorConverter->convert(0, $this->PDFAXwarnings));
                $this->SetFont('arial', '', 7.5, true, true);
                $this->x = $this->page_box['outer_width_LR'] + 1.5;
                $this->y = 1;
                $this->Cell($headerpgwidth, $this->FontSize, $hd, 0, 0, 'L', 0, '', 0, 0, 0, 'M');
                $this->SetFont($this->default_font, '', $this->original_default_font_size);
            }
        }
        if ($this->show_marks == 'CROSS' || $this->show_marks == 'CROPCROSS') {
            $this->SetLineWidth(0.1); // = 0.1 mm
            $this->SetDColor($this->colorConverter->convert(0, $this->PDFAXwarnings));
            $l = 14 / 2; // longer length of the cross line (half)
            $w = 6 / 2; // shorter width of the cross line (half)
            $r = 1.2; // radius of circle
            $m = $this->crossMarkMargin; // Distance of cross mark from margin
            $x1 = $this->page_box['outer_width_LR'] - $m;
            $x2 = $this->w - $this->page_box['outer_width_LR'] + $m;
            $y1 = $this->page_box['outer_width_TB'] - $m;
            $y2 = $this->h - $this->page_box['outer_width_TB'] + $m;
            // Left
            $this->Circle($x1, $this->h / 2, $r, 'S');
            $this->Line($x1 - $w, $this->h / 2, $x1 + $w, $this->h / 2);
            $this->Line($x1, $this->h / 2 - $l, $x1, $this->h / 2 + $l);
            // Right
            $this->Circle($x2, $this->h / 2, $r, 'S');
            $this->Line($x2 - $w, $this->h / 2, $x2 + $w, $this->h / 2);
            $this->Line($x2, $this->h / 2 - $l, $x2, $this->h / 2 + $l);
            // Top
            $this->Circle($this->w / 2, $y1, $r, 'S');
            $this->Line($this->w / 2, $y1 - $w, $this->w / 2, $y1 + $w);
            $this->Line($this->w / 2 - $l, $y1, $this->w / 2 + $l, $y1);
            // Bottom
            $this->Circle($this->w / 2, $y2, $r, 'S');
            $this->Line($this->w / 2, $y2 - $w, $this->w / 2, $y2 + $w);
            $this->Line($this->w / 2 - $l, $y2, $this->w / 2 + $l, $y2);
        }

        /* -- END CSS-PAGE -- */

        $this->HTMLFooter = $this->pageHTMLfooters[$this->page] ?? $this->pageHTMLfooters['_default'];

        $this->writeHTMLFooters();

        /* -- WATERMARK -- */
        if (($this->watermarkText) && ($this->showWatermarkText)) {
            $this->watermark($this->watermarkText, $this->watermarkAngle, 120, $this->watermarkTextAlpha); // Watermark text
        }
        if (($this->watermarkImage) && ($this->showWatermarkImage)) {
            $this->watermarkImg($this->watermarkImage, $this->watermarkImageAlpha); // Watermark image
        }
        /* -- END WATERMARK -- */
    }

    final function writeHTMLFooters()
    {
        if ($this->mirrorMargins && ($this->page) % 2 == 0) {
            $OE = 'E';
        } else {
            $OE = 'O';
        }

        if ($OE === 'E') {
            $this->saveHTMLFooter[$this->page][$OE]['html'] = $this->HTMLFooterE['html'];
        } else {
            $this->saveHTMLFooter[$this->page][$OE]['html'] = $this->HTMLFooter['html'];
        }

        if ($this->forcePortraitHeaders && $this->CurOrientation == 'L' && $this->CurOrientation != $this->DefOrientation) {
            $this->saveHTMLFooter[$this->page][$OE]['rotate'] = true;
            $this->saveHTMLFooter[$this->page][$OE]['ml'] = $this->tMargin;
            $this->saveHTMLFooter[$this->page][$OE]['mr'] = $this->bMargin;
            $this->saveHTMLFooter[$this->page][$OE]['mt'] = $this->rMargin;
            $this->saveHTMLFooter[$this->page][$OE]['mb'] = $this->lMargin;
            $this->saveHTMLFooter[$this->page][$OE]['mh'] = $this->margin_header;
            $this->saveHTMLFooter[$this->page][$OE]['mf'] = $this->margin_footer;
            $this->saveHTMLFooter[$this->page][$OE]['pw'] = $this->h;
            $this->saveHTMLFooter[$this->page][$OE]['ph'] = $this->w;
        } else {
            $this->saveHTMLFooter[$this->page][$OE]['ml'] = $this->lMargin;
            $this->saveHTMLFooter[$this->page][$OE]['mr'] = $this->rMargin;
            $this->saveHTMLFooter[$this->page][$OE]['mt'] = $this->tMargin;
            $this->saveHTMLFooter[$this->page][$OE]['mb'] = $this->bMargin;
            $this->saveHTMLFooter[$this->page][$OE]['mh'] = $this->margin_header;
            $this->saveHTMLFooter[$this->page][$OE]['mf'] = $this->margin_footer;
            $this->saveHTMLFooter[$this->page][$OE]['pw'] = $this->w;
            $this->saveHTMLFooter[$this->page][$OE]['ph'] = $this->h;
        }
        if(!$this->HTMLFooter){
            $this->saveHTMLFooter[$this->page][$OE]['mb'] = 15;
            $this->saveHTMLFooter[$this->page][$OE]['mf'] = 0;
        }
    }

    /**
     * @throws \Mpdf\MpdfException
     */
    final function _puthtmlheaders()
	{
		$this->state = 2;
		$nb = $this->page;

		for ($n = 1; $n <= $nb; $n++) {
			if ($this->mirrorMargins && $n % 2 == 0) {
				$OE = 'E';
			} // EVEN
			else {
				$OE = 'O';
			}
			$this->page = $n;
			$pn = $this->docPageNum($n);
			if ($pn) {
				$pnstr = $this->pagenumPrefix . $pn . $this->pagenumSuffix;
			} else {
				$pnstr = '';
			}

			$pnt = $this->docPageNumTotal($n);

			if ($pnt) {
				$pntstr = $this->nbpgPrefix . $pnt . $this->nbpgSuffix;
			} else {
				$pntstr = '';
			}

			if (isset($this->saveHTMLHeader[$n][$OE])) {
				$html = $this->replaces[$n]['header'] ?? (isset($this->saveHTMLHeader[$n][$OE]['html']) ? $this->saveHTMLHeader[$n][$OE]['html'] : '');
				$this->lMargin = $this->saveHTMLHeader[$n][$OE]['ml'];
				$this->rMargin = $this->saveHTMLHeader[$n][$OE]['mr'];
				$this->tMargin = $this->saveHTMLHeader[$n][$OE]['mh'];
				$this->bMargin = $this->saveHTMLHeader[$n][$OE]['mf'];
				$this->margin_header = $this->saveHTMLHeader[$n][$OE]['mh'];
				$this->margin_footer = $this->saveHTMLHeader[$n][$OE]['mf'];
				$this->w = $this->saveHTMLHeader[$n][$OE]['pw'];
				$this->h = $this->saveHTMLHeader[$n][$OE]['ph'];
				$rotate = (isset($this->saveHTMLHeader[$n][$OE]['rotate']) ? $this->saveHTMLHeader[$n][$OE]['rotate'] : null);
				$this->Reset();
				$this->pageoutput[$n] = [];
				$this->pgwidth = $this->w - $this->lMargin - $this->rMargin;
				$this->x = $this->lMargin;
				$this->y = $this->margin_header;

				if(!empty($this->replaces[$n])){
				    foreach($this->replaces[$n] as $key => $value){
                        $html = str_replace('{' . strtoupper($key) . '}', $value, $html);
                    }
                }
                $html = str_replace('{PAGENO}', $pnstr, $html);
				$html = str_replace($this->aliasNbPgGp, $pntstr, $html); // {nbpg}
				$html = str_replace($this->aliasNbPg, $nb, $html); // {nb}
				$html = preg_replace_callback('/\{DATE\s+(.*?)\}/', [$this, 'date_callback'], $html); // mPDF 5.7

				$this->HTMLheaderPageLinks = [];
				$this->HTMLheaderPageAnnots = [];
				$this->HTMLheaderPageForms = [];
				$this->pageBackgrounds = [];

				$this->writingHTMLheader = true;
				$this->WriteHTML($html, HTMLParserMode::HTML_HEADER_BUFFER);
				$this->writingHTMLheader = false;
				$this->Reset();
				$this->pageoutput[$n] = [];

				$s = $this->PrintPageBackgrounds();
				$this->headerbuffer = $s . $this->headerbuffer;
				$os = '';
				if ($rotate) {
					$os .= sprintf('q 0 -1 1 0 0 %.3F cm ', ($this->w * Mpdf::SCALE));
					// To rotate the other way i.e. Header to left of page:
					// $os .= sprintf('q 0 1 -1 0 %.3F %.3F cm ',($this->h*Mpdf::SCALE), (($this->rMargin - $this->lMargin )*Mpdf::SCALE));
				}
				$os .= $this->headerbuffer;
				if ($rotate) {
					$os .= ' Q' . "\n";
				}

				// Writes over the page background but behind any other output on page
				$os = preg_replace(['/\\\\/', '/\$/'], ['\\\\\\\\', '\\\\$'], $os);

				$this->pages[$n] = preg_replace('/(___HEADER___MARKER' . $this->uniqstr . ')/', "\n" . $os . "\n" . '\\1', $this->pages[$n]);

				$lks = $this->HTMLheaderPageLinks;
				foreach ($lks as $lk) {
					if ($rotate) {
						$lw = $lk[2];
						$lh = $lk[3];
						$lk[2] = $lh;
						$lk[3] = $lw; // swap width and height
						$ax = $lk[0] / Mpdf::SCALE;
						$ay = $lk[1] / Mpdf::SCALE;
						$bx = $ay - ($lh / Mpdf::SCALE);
						$by = $this->w - $ax;
						$lk[0] = $bx * Mpdf::SCALE;
						$lk[1] = ($this->h - $by) * Mpdf::SCALE - $lw;
					}
					$this->PageLinks[$n][] = $lk;
				}
				/* -- FORMS -- */
				foreach ($this->HTMLheaderPageForms as $f) {
					$this->form->forms[$f['n']] = $f;
				}
				/* -- END FORMS -- */
			}

			if (isset($this->saveHTMLFooter[$n][$OE])) {

				$html = $this->saveHTMLFooter[$this->page][$OE]['html'];

				$this->lMargin = $this->saveHTMLFooter[$n][$OE]['ml'];
				$this->rMargin = $this->saveHTMLFooter[$n][$OE]['mr'];
				$this->tMargin = $this->saveHTMLFooter[$n][$OE]['mh'];
				$this->bMargin = $this->saveHTMLFooter[$n][$OE]['mf'];
				$this->margin_header = $this->saveHTMLFooter[$n][$OE]['mh'];
				$this->margin_footer = $this->saveHTMLFooter[$n][$OE]['mf'];
				$this->w = $this->saveHTMLFooter[$n][$OE]['pw'];
				$this->h = $this->saveHTMLFooter[$n][$OE]['ph'];
				$rotate = (isset($this->saveHTMLFooter[$n][$OE]['rotate']) ? $this->saveHTMLFooter[$n][$OE]['rotate'] : null);
				$this->Reset();
				$this->pageoutput[$n] = [];
				$this->pgwidth = $this->w - $this->lMargin - $this->rMargin;
				$this->x = $this->lMargin;
				$top_y = $this->y = $this->h - $this->margin_footer;

				// if bottom-margin==0, corrects to avoid division by zero
				if ($this->y == $this->h) {
					$top_y = $this->y = ($this->h + 0.01);
				}

				$html = str_replace('{PAGENO}', $pnstr, $html);
				$html = str_replace($this->aliasNbPgGp, $pntstr, $html); // {nbpg}
				$html = str_replace($this->aliasNbPg, $nb, $html); // {nb}
				$html = preg_replace_callback('/\{DATE\s+(.*?)\}/', [$this, 'date_callback'], $html); // mPDF 5.7


				$this->HTMLheaderPageLinks = [];
				$this->HTMLheaderPageAnnots = [];
				$this->HTMLheaderPageForms = [];
				$this->pageBackgrounds = [];

				$this->writingHTMLfooter = true;
				$this->InFooter = true;
				$this->WriteHTML($html, HTMLParserMode::HTML_HEADER_BUFFER);
				$this->InFooter = false;
				$this->Reset();
				$this->pageoutput[$n] = [];

				$fheight = $this->y - $top_y;
				$adj = -$fheight;

				$s = $this->PrintPageBackgrounds(-$adj);
				$this->headerbuffer = $s . $this->headerbuffer;
				$this->writingHTMLfooter = false; // mPDF 5.7.3  (moved after PrintPageBackgrounds so can adjust position of images in footer)

				$os = '';
				$os .= $this->StartTransform(true) . "\n";

				if ($rotate) {
					$os .= sprintf('q 0 -1 1 0 0 %.3F cm ', ($this->w * Mpdf::SCALE));
					// To rotate the other way i.e. Header to left of page:
					// $os .= sprintf('q 0 1 -1 0 %.3F %.3F cm ',($this->h*Mpdf::SCALE), (($this->rMargin - $this->lMargin )*Mpdf::SCALE));
				}

				$os .= $this->transformTranslate(0, $adj, true) . "\n";
				$os .= $this->headerbuffer;

				if ($rotate) {
					$os .= ' Q' . "\n";
				}

				$os .= $this->StopTransform(true) . "\n";

				// Writes over the page background but behind any other output on page
				$os = preg_replace(['/\\\\/', '/\$/'], ['\\\\\\\\', '\\\\$'], $os);

				$this->pages[$n] = preg_replace('/(___HEADER___MARKER' . $this->uniqstr . ')/', "\n" . $os . "\n" . '\\1', $this->pages[$n]);

				$lks = $this->HTMLheaderPageLinks;

				foreach ($lks as $lk) {

					$lk[1] -= $adj * Mpdf::SCALE;

					if ($rotate) {
						$lw = $lk[2];
						$lh = $lk[3];
						$lk[2] = $lh;
						$lk[3] = $lw; // swap width and height

						$ax = $lk[0] / Mpdf::SCALE;
						$ay = $lk[1] / Mpdf::SCALE;
						$bx = $ay - ($lh / Mpdf::SCALE);
						$by = $this->w - $ax;
						$lk[0] = $bx * Mpdf::SCALE;
						$lk[1] = ($this->h - $by) * Mpdf::SCALE - $lw;
					}

					$this->PageLinks[$n][] = $lk;
				}

				/* -- FORMS -- */
				foreach ($this->HTMLheaderPageForms as $f) {
					$f['y'] += $adj;
					$this->form->forms[$f['n']] = $f;
				}
				/* -- END FORMS -- */
			}
		}

		$this->page = $nb;
		$this->state = 1;
	}
}
