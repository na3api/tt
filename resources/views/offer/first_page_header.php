<!DOCTYPE HTML>
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <script  type="text/javascript">

    </script>
</head>
<body>
<div id="first_page" name="html_firstpage" style="margin-bottom: 1pt">
    <table cellspacing="0" cellpadding="0" class="wide">
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td class="top">
                <img src="<?= image_path('offer/belcs-tm7us.001.png')?>" width="111" height="43" alt="logo">
            </td>
            <td class="counter">

            </td>
        </tr>
        <tr></tr>
        <tr>
            <td colspan="4" style="padding-bottom: 13px">
                <p>
                    <span class="h2 header_title" id="test">{TITLE}</span>
                </p>
            </td>
        </tr>
        <tr class="header_row">
            <td class="header-col-1">
                <p>
                    <span class="bold frame_content">Angebots-Nr. </span>
                </p>
            </td>
            <td class="header-col-2">
                <p>
                    <span class="bold"><?=$data->requestNumber()?></span>
                </p>
            </td>
            <td class="header-col-3">
                <p>
                    <span>Ihr auto.de Berater</span>
                </p>
            </td>
            <td class="header-col-4">

            </td>
        </tr>
        <tr class="header_row">
            <td>
                <p>
                    <span class="frame_content">Kunden-Nr./E-Mail</span>
                </p>
            </td>
            <td>
                <p>
                    <span><?=$data->rEmail()?></span>
                </p>
            </td>
            <td colspan="2">
            </td>

        </tr>
        <tr class="header_row">
            <td>
                <p>
                    <span class="frame_content">Seite</span>
                </p>
            </td>
            <td>
                <p>
                    <span class="bold page">{PAGENO}</span>
                    <span> von </span>
                    <span class="bold topage">{nbpg}</span>
                </p>
            </td>
            <td colspan="2">
                <p>
                    <span class="pretitle"><?= $data->salesContact() ?></span>
                </p>
            </td>

        </tr>
        <tr class="header_row">
            <td>
                <p>
                    &nbsp;
                </p>
            </td>
            <td>
                <p>
                    &nbsp;
                </p>
            </td>
            <td colspan="2">
                <p>
                    &nbsp;
                </p>
            </td>

        </tr>
        <tr class="header_row">
            <td>
                <p>
                    <span class="bold frame_content">Fahrzeug</span><br>
                    <span>&nbsp;</span><br>
                    <span class="frame_content">auto.de-ID</span><br>
                </p>
            </td>
            <td>
                <p>
                    <span class="bold"><?=$data->cMake()?></span><br>
                    <span class="bold"><?=$data->cModel()?></span><br>
                    <span><?=$data->cId() ?></span>
                </p>
            </td>
            <td>
                <p>
                    <span>Anschrift</span>
                </p>
                <p>
                    <br>
                    <span class="frame_content">Telefon-Nr.</span><br>
                    <span class="frame_content">Fax</span><br>
                    <span class="frame_content">E-Mail</span>
                    <br>
                    <br>
                    <span class="frame_content">Datum / Uhrzeit </span>
                </p>
            </td>
            <td>
                <p>
                    <span>Thomaskirchhof 20</span><br>
                    <span>04109 Leipzig</span>
                </p>
                <p>
                    <span>+49 (0)800 40 30 182 (kostenlos)</span><br>
                    <span>+49 (0)341 99153879</span><br>
                    <span>auto@auto.de</span>
                    <br>
                    <br>
                    <span><?=$data->date()?> | <?=$data->time()?> Uhr </span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="small_text frame_content vicus">auto.de | VICUS Media GmbH | Thomaskirchhof 20 | 04109 Leipzig</div>
            </td>
        </tr>
        </tbody>
    </table>
</div><!--
<div id="with_image" style="margin-bottom: 1pt">
    <table cellspacing="0" cellpadding="0">
        <tbody >
        <tr>
            <td class="top2">
                <img src="<?= image_path('offer/belcs-tm7us.001.png')?>" width="111" height="43" alt="Logo">
            </td>
            <td></td>
            <td></td>
            <td class="counter">
                        <span>
                            <span>Seite </span>
                            <span class="bold page">{PAGENO}</span>
                            <span> von </span>
                            <span class="bold topage">{nbpg}</span>
                        </span>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <p>
                    <span class="h2 header_title">Ihr persönliches auto.de Angebot</span>
                </p>
            </td>
        </tr>
        <tr class="header_row">
            <td class="header-col-1">
                <p>
                    <span class="bold">Angebots-Nr. </span>
                </p>
            </td>
            <td class="header-col-2">
                <p>
                    <span class="bold"><?=$data->requestNumber()?></span>
                </p>
            </td>
            <td class="header-col-3">
                <p>
                    <span class="bold">Ihr Fahrzeug</span>
                </p>
            </td>
            <td class="header-col-4">
                <p>
                    <span class="bold"><?=$data->cMake()?></span>
                </p>
            </td>
        </tr>
        <tr class="header_row">
            <td>
                <p>
                    <span>Kunden-Nr./E-Mail</span>
                </p>
            </td>
            <td>
                <p>
                    <span><?=$data->rEmail()?></span>
                </p>
            </td>
            <td></td>
            <td>
                <p>
                    <span class="bold"><?=$data->cModel()?></span>
                </p>
            </td>
        </tr>
        <tr class="header_row">
            <td></td>
            <td></td>
            <td>
                <p>
                    <span>auto.de-ID</span>
                </p>
            </td>
            <td>
                <p>
                    <span><?=$data->cId()?></span>
                </p>
            </td>
        </tr>
        <tr class="header_row last">
            <td>
                <p>
                    <span>Datum / Uhrzeit </span>
                </p>
                <p>
                    <span>Berater</span>
                </p>
                <p>
                    <span>Telefon-Nr.</span>
                </p>
                <p>
                    <span>E-Mail</span>
                </p>
            </td>
            <td>
                <p>
                    <span><?=$data->date()?> | <?=$data->time()?> Uhr</span>
                </p>
                <p>
                    <span><?= $data->salesContact() ?></span>
                </p>
                <p>
                    <span>+49 (0)800 40 30 182 (kostenlos)</span>
                </p>
                <p>
                        <span>
                            <span class="small_text">auto@auto.de</span>
                        </span>
                </p>
            </td>
            <td></td>
            <td>
                <div id="image">
                    <img src="<?= image_path('offer/belcs-tm7us.003.png')?>" height="70" alt="">
                </div>
                <div id="button">
                    <button>ausfüllbare Felder</button>
                </div>
                <div id="empty" style="width: 70px;height: 70px;">

                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div id="template">
    <table cellspacing="0" cellpadding="0">
        <tbody >
        <tr>
            <td class="top2">
                <img src="<?= image_path('offer/belcs-tm7us.001.png')?>" width="111" height="43" alt="Logo">
            </td>
            <td></td>
            <td></td>
            <td class="counter">
                        <span>
                            <span>Seite </span>
                            <span class="bold page">{PAGENO}</span>
                            <span> von </span>
                            <span class="bold topage">{nbpg}</span>
                        </span>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <p>
                    <span class="h2 header_title">Ihr persönliches auto.de Angebot</span>
                </p>
            </td>
        </tr>
        <tr class="header_row">
            <td class="header-col-1">
                <p>
                    <span class="bold">Angebots-Nr. </span>
                </p>
            </td>
            <td class="header-col-2">
                <p>
                    <span class="bold"><?=$data->requestNumber()?></span>
                </p>
            </td>
            <td class="header-col-3">
                <p>
                    <span class="bold">Ihr Fahrzeug</span>
                </p>
            </td>
            <td class="header-col-4">
                <p>
                    <span class="bold"><?=$data->cMake()?></span>
                </p>
            </td>
        </tr>
        <tr class="header_row">
            <td>
                <p>
                    <span>Kunden-Nr./E-Mail</span>
                </p>
            </td>
            <td>
                <p>
                    <span><?=$data->rEmail()?></span>
                </p>
            </td>
            <td></td>
            <td>
                <p>
                    <span class="bold"><?=$data->cModel()?></span>
                </p>
            </td>
        </tr>
        <tr class="header_row">
            <td></td>
            <td></td>
            <td>
                <p>
                    <span>auto.de-ID</span>
                </p>
            </td>
            <td>
                <p>
                    <span><?=$data->cId()?></span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <p style="padding-bottom: 5px; height: 45px;">
        <?= $data->rSalutation()?>
        <?= $data->rFirstName() ?>
        <?= $data->rLastName() ? $data->rLastName() . ' | ' : '' ?>
        <?= $data->rStreet() ?>
        <?= $data->rNumber() ? $data->rNumber() . ' | ' : '' ?>
        <?= $data->rZip() ?>
        <?= $data->rCity() ?>
    </p>
    <span class="pretitle normal">
                auto.de | VICUS Media GmbH<br>
        <?= $data->salesContact()?>
            </span>
</div>-->
</body>
</html>