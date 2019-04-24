<!DOCTYPE HTML>
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <script  type="text/javascript">

    </script>
</head>
<body>
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
            <td colspan="4" style="padding-bottom: 15px">
                <p>
                    <span class="h2 header_title">Ihre Rückantwort an auto.de</span>
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