<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <script>
            function setHtml(selector, html) {
                var listElement = document.querySelectorAll(selector);
                for(var i in listElement){
                    listElement[i].innerHTML = html;
                }
            }

            function show(selector) {
                var listElement = document.querySelectorAll(selector);
                if(listElement.length) {
                    for (var i in listElement) {
                        listElement[i].style.display = 'block';
                    }
                }
            }

            function hide(selector) {
                var listElement = document.querySelector(selector);
                listElement.style.display = 'none';
                if(listElement.length) {
                    for (var i in listElement) {
                        listElement[i].style.display = 'none';
                    }
                }
            }

            function subst() {
                const EMPTY = '#empty';
                const IMAGE = '#image';
                const BUTTON = '#button';

                var vars={};
                var button_pages = [
                    3,
                    4
                ];

                var x=document.location.search.substring(1).split('&');

                for (var i in x) {
                    var z=x[i].split('=',2);
                    vars[z[0]] = unescape(z[1]);
                }

                var headers = {
                    1: {title: 'Ihr persönliches auto.de Angebot', type: IMAGE},
                    2: {title: 'Ihr persönliches auto.de Angebot', type: IMAGE},
                    3: {title: 'Kfz-Kaufvertrag', type: BUTTON},
                    4: {title: 'Kfz-Kaufvertrag', type: BUTTON},
                };

                headers[vars.topage] = {title: 'Ihre Rückantwort an auto.de', type: EMPTY};
                headers[vars.topage - 1] = {title: 'Ihre zusätzlichen Services', type: BUTTON};
                headers[vars.topage - 2] = {title: 'Finanzierungsantrag - Zusammenfassung', type: EMPTY};
                headers[vars.topage - 3] = {title: 'Finanzierungsantrag - Selbstauskunft Privatperson', type: EMPTY};
                headers[vars.topage - 4] = {title: 'Finanzierungsantrag - Selbstauskunft Privatperson', type: EMPTY};
                headers[vars.topage - 5] = {title: 'Finanzierungsantrag - Selbstauskunft Privatperson', type: EMPTY};
                headers[vars.topage - 6] = {title: 'Finanzierungsantrag - Selbstauskunft Privatperson', type: EMPTY};
                headers[vars.topage - 7] = {title: 'Finanzierungsantrag - Finanzierungsantragsdetails', type: EMPTY};
                headers[vars.topage - 8] = {title: 'Bevollmächtigung & Vermittlungsauftrag', type: EMPTY};

                for (var k = 5; k <= vars.topage - 9; k++){
                    headers[k] = {title: 'Kfz-Kaufvertrag - Ausstattung Ihres Fahrzeuges', type: IMAGE};
                }

                setHtml(".page", vars.page);
                setHtml(".topage", vars.topage);

                document.getElementById("first_page").style.display = 'none';
                document.getElementById("with_image").style.display = 'none';
                document.getElementById("template").style.display = 'none';

                hide(EMPTY);
                hide(IMAGE);
                hide(BUTTON);

                if(parseInt(vars.page) === 1){
                    document.getElementById("first_page").style.display = 'block';
                    document.getElementById("counter").style.display = 'none';
                }else if(vars.page === vars.topage){
                    document.getElementById("template").style.display = 'block';
                }
                else{
                    document.getElementById("with_image").style.display = 'block';
                }

                setHtml(".header_title", headers[vars.page].title);
                show(headers[vars.page].type);
            }
        </script>
    </head>
    <body class="main_header" onload="subst()">
        <div id="first_page" style="margin-bottom: 1pt">
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
                    <td colspan="4">
                        <p>
                            <span class="h2 header_title">Ihr persönliches auto.de Angebot</span>
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
                            <span class="bold page">1</span>
                            <span> von </span>
                            <span class="bold topage"></span>
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
        </div>
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
                            <span class="bold page"></span>
                            <span> von </span>
                            <span class="bold topage"></span>
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
                            <span class="bold page"></span>
                            <span> von </span>
                            <span class="bold topage"></span>
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
        </div>
    </body>
</html>