<!DOCTYPE HTML>
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
</head>
<body>
<htmlpageheader name="lastpage" page="2" show-this-page="2">
    <table width="100%">
        <tr>
            <td width="33%">{DATE j-m-Y}</td>
            <td width="33%" align="center">{PAGENO}/{nbpg}</td>
            <td width="33%" style="text-align: right; ">My document</td>
        </tr>
    </table>
</htmlpageheader>

<div id="with_image" style="margin-bottom: 1pt"  >
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
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="padding-bottom: 15px">
                <p>
                    <span class="h2 header_title">{TITLE}</span>
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
        <tr><td><br></td></tr>
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
            {TYPE}
        </tr>
        </tbody>
    </table>
</div>
<hr style="height: 1pt; color: rgb(0,92,203);">
</body>
</html>