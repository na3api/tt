<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="generator" content="Aspose.Words for .NET 17.1.0.0">
    <title></title>
</head>
<body>
<div class="page_body">
    <table style="width: 100%">
        <tr>
            <td colspan="2">
                <p class="big_text bold">Vertragsnehmer</p>
                <p class="big_text"><?=$data->rSalutation()?> <?=$data->rFirstName()?> <?=$data->rLastName()?></p>
                <p class="big_text"><?=$data->rStreet()?> <?=$data->rNumber()?></p>
                <p class="big_text bold">
                    <?=$data->rZip()?> <?=$data->rCity()?>
                </p>
            </td>

            <td class="col4" rowspan="2">
                <span>
                    <img src="<?= image_path('offer/belcs-tm7us.003.png')?>" height="120" style="margin-top: 15px" alt="">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <p style="padding-bottom: 3px; padding-top: 5px; margin-left: -3px">
                    <span class="h2">Ihr persönliches Angebot für Ihren <?=$data->cMake()?> <?=$data->cModel()?> <?=$data->cSubModel()?></span>
                </p>
            </td>
        </tr>
    </table>

    <div class="justify">
        <p>
            <span>Sehr geehrte/r <?=$data->rSalutation()?> <?=$data->rFirstName()?> <?=$data->rLastName()?>,</span>
        </p>
        <p>
            <span>wir bedanken uns für Ihr Interesse. Gern übersenden wir Ihnen den Antrag auf Abschluss eines Kaufvertrages/ Finanzierungsvertrages für Ihr Wunschauto <?=$data->cMake()?> <?=$data->cModel()?> <?=$data->cSubModel()?>.</span>
        </p>
        <p>
            <span>Zudem erhalten Sie Ihre persönliche „auto.de Checkliste“, welche Ihnen einen Überblick über alle relevanten Vertragsunterlagen gibt, die bei uns einzureichen sind. </span>
        </p>
        <p>
            <span>Des Weiteren erhalten Sie unsere AGB, Datenschutzhinweise, Merkblatt zum Finanzierungsvertrag und Informationen zu den zusätzlichen Services, das Formular Selbstauskunft sowie das Formblatt Europäische Standardinformationen für Verbraucherkredite. Mit dem Finanzierungsvertrag können wir Ihnen, durch die Zusammenarbeit mit externen Partnern, ein umfangreiches Dienstleistungsangebot unterbreiten.</span>
        </p>
        <p>
            <span>Erst durch die Annahme Ihres Antrages durch auto.de, kommt ein Kaufvertrag/Finanzierungsvertrag zustande, darum bitte wir Sie das Antragsformular vollständig auszufüllen, um Ihr Anliegen zügig bearbeiten zu können.</span>
        </p>
        <p>
            <span>Für eine Express-Bearbeitung können Sie uns selbstverständlich den vollständig ausgefüllten und unterzeichneten Antrag mit allen erforderlichen Unterlagen vorab per E-Mail oder Fax zusenden.</span>
        </p>
        <p>
            <span>Bitte beachten Sie, dass mit dem Annahmeschreiben durch auto.de der unterzeichnete Antrag (inkl. der erforderlichen Unterlagen) im Original vorliegen sowie die Identifikationsfeststellung durch das Ident-Verfahren durchgeführt werden muss.</span>
        </p>
        <p>
            <span>Senden Sie bitte die Unterlagen im Original an folgende Anschrift:</span>
        </p>
        <p>
            <span>auto.de | VICUS Media GmbH</span><br>
            <span><?= $data->salesContact() ?></span><br>
            <span>Thomaskirchhof 20</span><br>
            <span>04109 Leipzig</span><br>
        </p>
        <p>
            <span>Da es sich bei diesem Angebot um ein sofort verfügbares Fahrzeug handelt, bleibt dem Händler der Zwischenverkauf vorbehalten. Deshalb benötigen wir Ihre vollständigen und unterzeichneten Antragsunterlagen schnellstmöglich. </span>
        </p>
        <p>
            <span>Sie haben noch Fragen, unser auto.de Service-Team steht Ihnen selbstverständlich rund um die Uhr zur Verfügung.&nbsp; </span>
        </p>
    </div>
    <table style="margin-left: -3px;" class="wide">
        <tr>
            <td style="width: 82%">
                <span>Vielen Dank für Ihr Vertrauen.</span><br>
                <p>
                    <span>Mit freundlichen Grüßen</span><br>
                </p>
                <p>
                    <span>&nbsp;</span>
                </p>
                <p>
                    <span><?= $data->salesContact() ?></span>
                </p>
            </td>
            <td class="beste-td">
                <div class="beste">
                    <img src="<?= image_path('offer/DT Beste Autobörsen.jpg')?>" alt="">
                    <img src="<?= image_path('offer/DT Vertrauen.jpg')?>" alt="">
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="page_body" >
    <span class="h1">auto.de-Checkliste</span>
    <p>
        <span>So machen Sie Ihr Auto startklar:</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="justify_table">
        <tbody>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step1_grey.svg')?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <p>
                    <span class="bold">1. Schritt: Durchlesen aller Informationen</span><br>
                    <span>Beginnen Sie mit dem Durchlesen der beigefügten Informationen zu Ihrem neuen Wunschauto, den Kaufvertrag, AGB zum Kaufvertrag sowie die Unterlagen für Ihren Finanzierungsantrag und weitere Dienstleistungen.</span>
                </p>
            </td>
        </tr>
        <tr>
            <td  class="first_col">
                <img src="<?= image_path('offer/step2_grey.svg')?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <span class="bold">2. Schritt: Dokumente ausfüllen und unterschreiben</span><br>
                <span>Bitte vervollständigen Sie die nachfolgenden Dokumente mit ihrer Unterschrift wie in Ihrem Personalausweis/ Reisepass an den in den Dokumenten dafür mit einem X gekennzeichneten Stellen:</span><br>
                <ul class="boxed_list">
                    <li>
                        <span class="cell">Die auto.de Checkliste</span>
                    </li>
                    <li>
                        <span class="cell">Den Kaufvertrag inkl. Verkäufer AGB</span>
                    </li>
                    <li>
                        <span class="cell">Ihren Finanzierungsantrag</span>
                    </li>
                    <li>
                        <span class="cell">Das SEPA-Lastschriftmandat zur Finanzierung</span>
                    </li>
                    <li>
                        <span class="cell">Die Bevollmächtigung zur Zulassung/Vermittlung/Bestellung</span>
                    </li>
                    <li>
                        <span class="cell">Den Auftrag für Ihre gewählten zusätzlichen Services</span>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td  class="first_col">
                <img src="<?= image_path('offer/step3_grey.svg')?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <span class="bold">3. Schritt: notwendige Unterlagen</span><br>
                <span>Bitte stellen Sie die folgenden notwendigen Unterlagen zusammen:</span><br>
                <ul class="boxed_list">
                    <li>
                        <span class="cell">Die vervollständigten und von Ihnen unterzeichneten Dokumente inkl. aller Anlagen.</span>
                    </li>
                    <li>
                        <span class="cell">
                            <span>Eine Farbkopie Ihres Personalausweises </span>
                            <span class="bold">(lesbar: Vorder- und Rückseite / komplett abgebildet mit allen Rändern) </span>
                            <span>oder die Farbkopie Ihres Reisepasses (inkl. Meldebescheinigung: nicht älter als 3 Monate).</span>
                        </span>
                    </li>
                    <li>
                        <span class="cell">Einkommensnachweise der letzten 3 Monate.</span>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step4_grey.svg')?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <span class="bold">4. Schritt: Dokumente an auto.de versenden</span><br>
                <span>Damit Sie schnellstmöglich starten können, übersenden Sie bitte sämtliche im Schritt 3 erfassten Dokumente und Unterlagen zur Express-Bearbeitung per E-Mail oder Fax an Ihren persönlichen auto.de Berater.</span><br>
                <span>Bitte berücksichtigen Sie allerdings, dass sämtliche im Schritt 3 erfassten Dokumente und Unterlagen zur Wirksamkeit der Vereinbarungen im Original vorliegen müssen und deswegen ein postalischer Versandt an: auto.de, <?= $data->salesContact() ?>, Thomaskirchhof 20, 04109 Leipzig erforderlich ist.</span>
            </td>
        </tr>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step5_grey.svg')?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <p>
                    <span class="bold">5. Schritt: Feststellung der Identität</span><br>
                    <span>auto.de und seine Partner sind gesetzlich verpflichtet, bei seinen Kunden eine Identifikationsfeststellung (Legitimation) durchzuführen. Auf Grund des Vertragsabschlusses im Rahmen des Fernabsatzgesetzes erfolgt die Identitätsprüfung über einen öffentlich zertifizierten Partner.</span><br>
                    <span>Die Feststellung der Identität ist für Sie selbstverständlich kostenlos und muss spätestens mit Annahmemitteilung von auto.de bzw. eines Partners von auto.de durchgeführt werden. Das notwendige Dokument (Coupon) wird Ihnen im Nachgang von auto.de oder einem Partner zur Verfügung gestellt.</span>
                </p>
            </td>
        </tr>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step6_grey.svg')?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <p>
                    <span class="bold">6. Schritt: Auslieferung Ihres Autos</span><br>
                    <span>Im Rahmen der Annahmemitteilung von auto.de bzw. eines Partners von auto.de wird Ihr Ansprechpartner in der auto.de Kundenbetreuung Sie kontaktieren, um Sie sicher durch den letzten Abschnitt zu begleiten. Dabei koordiniert Ihr Ansprechpartner alle noch notwendigen Schritte (Liefer- / Abholtermin, Zulassung, usw.) und steht Ihnen für Rückfragen jederzeit gern zur Verfügung.</span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <p>
        <span style="line-height: 11pt">Hiermit bestätige(n) ich/wir, dass alle Bestandteile dieser auto.de Checkliste sowie der Ablauf der auto.de Checkliste selbst zur Kenntnis genommen und akzeptiert wurden.</span>
    </p>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="col3">
                <p>
                    <span>Ort, Datum</span>
                </p>
            </td>
            <td class="col12">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="col1">
                <p>
                    <span>Unterschrift Vertragsnehmer / Antragsteller</span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="ort_datum">
                        <input type="text" name="ort_datum">
                    </span>
                </p>
            </td>
            <td>
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="middle">
                <p>
                    <span class="grey_box">&#10005; </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="page_body">
    <span class="h1">Kfz-Kaufvertrag</span>
    <p></p>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td colspan="3" class="col2">
                    <p>
                        <span class="pretitle">Käufer</span>
                    </p>
                </td>
                <td class="col12">
                    <p>
                        <span class="bold">&nbsp;</span>
                    </p>
                </td>
                <td colspan="3" class="col2">
                    <p>
                        <span class="pretitle">Verkäufer (Unternehmer)</span>
                    </p>
                </td>
            </tr>
            <tr class="field_title">
                <td colspan="3" class="col2">
                    <p>
                        <span>Vorname Name, Firma</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td colspan="3" class="col2">
                    <p>
                        <span>Vorname Name, Firma</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="fields_color">
                    <div>
                        <input type="text" name="buyer_first_name" class="col2 buyer_first_name">
                    </div>
                </td>
                <td>
                    <p >
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td colspan="3" class="fields_color">
                    <div>
                        <input type="text" name="seller_first_name" class="col2">
                    </div>
                </td>
            </tr>
            <tr class="field_title">
                <td colspan="3">
                    <p>
                        <span>Straße Nr.</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td colspan="3">
                    <p>
                        <span>Straße Nr.</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="fields_color">
                    <div>
                        <input type="text" name="buyer_addres" class="col2">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td colspan="3" class="fields_color">
                    <div>
                        <input type="text" name="seller_addres" class="col2">
                    </div>
                </td>
            </tr>
            <tr class="field_title">
                <td class="col8">
                    <p>
                        <span>PLZ</span>
                    </p>
                </td>
                <td  class="col6">
                    <p>
                        <span>Wohnort</span>
                    </p>
                </td>
                <td  class="col6">
                    <p>
                        <span>Telefon</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td  class="col8">
                    <p>
                        <span>PLZ</span>
                    </p>
                </td>
                <td  class="col6">
                    <p>
                        <span>Wohnort</span>
                    </p>
                </td>
                <td  class="col6">
                    <p>
                        <span>Telefon</span>
                    </p>
                </td>
            </tr>
            <tr >
                <td class="fields_color">
                    <div>
                        <input type="text" name="buyer_plz">
                    </div>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="buyer_place">
                    </div>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="buyer_phone">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="seller_plz">
                    </div>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="seller_place">
                    </div>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="seller_phone">
                    </div>
                </td>
            </tr>
            <tr class="field_title">
                <td colspan="3">
                    <p>
                        <span>E-Mail</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td colspan="3">
                    <p>
                        <span>E-Mail</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="fields_color">
                    <div>
                        <input type="text" name="buyer_email" class="col2">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td colspan="3" class="fields_color">
                    <div>
                        <input type="text" name="seller_email" class="col2">
                    </div>
                </td>
            </tr>
            <tr class="field_title">
                <td colspan="2">
                    <p>
                        <span>Personalausweis- / Reisepass-Nr.</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>Ausstellungsbehörde</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td colspan="2">
                    <p>
                        <span>Registergericht</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>Registernummer</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="fields_color">
                    <div>
                        <input type="text" name="buyer_passport_nr" class="col4">
                    </div>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="buyer_passport_privaider" class="col5">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td colspan="2" class="fields_color">
                    <div>
                        <input type="text" name="seller_commercial_register" class="col4">
                    </div>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="seller_commercial_register_nr" class="col5">
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <p>
            <span class="h3">1. Fahrzeug</span>
        </p>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr class="field_title">
                <td class="col2 first_col">
                    <p>
                        <span>Marke</span>
                    </p>
                </td>
                <td class="col12">
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td class="col4">
                    <p>
                        <span>kW / PS</span>
                    </p>
                </td>
                <td class="col5">
                    <p>
                        <span>Erstzulassung (EZ)</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_marke">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_kw_ps">
                    </div>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_year">
                    </div>
                </td>
            </tr>
            <tr class="field_title">
                <td>
                    <p>
                        <span>Model</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>Hubraum</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_model">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td class="fields_color addon">
                    <div>
                        <input type="text" name="vehicle_capacity"> <span class="sigh">ccm</span>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr class="field_title">
                <td>
                    <p>
                        <span>FIN (Fahrzeugidentifikationsnummer)</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>Nächste Hauptuntersuchung</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>(Netto-) Kaufpreis</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_fin">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_next_general_inspection">
                    </div>
                </td>
                <td class="fields_color addon">
                    <div>
                        <input type="text" name="vehicle_net_price"> €
                    </div>
                </td>
            </tr>
            <tr class="field_title">
                <td>
                    <p>
                        <span>Fahrzeugbriefnummer / Zulassungsbescheinigung Teil II</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>CO2-Effizienzklasse</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>+19% Umsatzsteuer</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_reg_number">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_CO2_efficiency_class">
                    </div>
                </td>
                <td class="fields_color addon">
                    <div>
                        <input type="text" name="vehicle_value_added_tax"> €
                    </div>
                </td>
            </tr>
            <tr class="field_title">
                <td>
                    <p>
                        <span>Fahrzeugart</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>Amtliches Kennzeichen</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>(Brutto-)Kaufpreis</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_condition">
                    </div>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
                <td class="fields_color">
                    <div>
                        <input type="text" name="vehicle_license_number">
                    </div>
                </td>
                <td class="fields_color addon">
                    <div>
                        <input type="text" name="vehicle_gross_purchase_price"> €
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <p>
            <span class="h3">2. Gewährleistung </span><span>(bitte ankreuzen)</span>
        </p>
        <p>
            <span>Bei dem Kauf handelt es sich im Hinblick auf der Gewährleistung um einen:</span>
        </p>
        <ul>
            <li>
                <input type="checkbox" name="b2c_end_customer" checked="checked" value="">
                <span class="cell">
                    <span class="bold">B2C – Verkauf an Endkunden |</span>
                    <span> Es gelten die gesetzlichen Regelungen für die Sachmängelhaftung beim Verkauf von Fahrzeugen an Endkunden.</span>
                </span>
            </li>
            <li>
                <input type="checkbox" name="b2c_car_dealer">
                <span class="cell">
                    <span class="bold">B2B – Verkauf an gewerblichen Autohändler | </span>
                    <span>Die Sachmängelhaftung wird ausgeschlossen, da Verkäufer und Käufer unternehmerisch tätig sind und das Fahrzeug rein gewerblich genutzt wird.</span>
                </span>
            </li>
        </ul>
    </form>
</div>

<div class="page_body">
    <span class="h3">3. Zusicherung des Verkäufers </span><span class="small_text">(bitte ankreuzen)</span>
    <p>
        <span>Der </span>
        <span class="bold">Verkäufer</span>
        <span> sichert folgende Eigenschaften zu (nicht Zutreffendes bitte streichen):</span>
    </p>
    <form>
    <ul>
        <li>
            <input type="checkbox" name="assurance.including" checked="checked">
            <span class="cell">Das Fahrzeug einschließlich des mitverkauften Zubehörs steht in seinem alleinigen Eigentum</span>
        </li>
        <li>
            <input type="checkbox" name="assurance.has_total_mileage" checked="checked" >
            <span class="cell">
                <span>Das Fahrzeug weist eine Gesamtfahrleistung von </span>
                <span class="fillable_line narrow">
                    <input type="text" name="assurance.mileage">
                </span>
                <span> km auf</span>
            </span>
        </li>
        <li>
            <input type="checkbox" name="assurance.has_owned_by_seller" checked="checked">
            <span class="cell">Das Fahrzeug hatte, seit es im Eigentum des Verkäufers war, und soweit bekannt auch früher, keinen Unfallschaden </span>
        </li>
        <li>
            <input type="checkbox" name="assurance.has_since_property_seller">
            <span class="cell">
                <span>Das Fahrzeug hatte, seit es im Eigentum des Verkäufers war, und soweit bekannt auch früher folgende Unfallschäden: </span>
                <span class="fillable_line wide"><input type="text" name="assurance.since_property_seller"></span>
            </span>
        </li>
        <li>
            <input type="checkbox" name="assurance.has_not_damages" checked="checked">
            <span class="cell">Das Fahrzeug hat keine sonstigen Beschädigungen</span>
        </li>
        <li>
            <input type="checkbox" name="assurance.has_damages" >
            <span class="cell">
                <span>Das Fahrzeug hat folgende Beschädigungen: </span>
                <span class="fillable_line wide"><input type="text" name="assurance.damages"></span>
            </span>
        </li>
        <li>
            <input type="checkbox" name="assurance.has_additional_eq" checked="checked">
            <span class="cell">
                <span>Das Fahrzeug weist folgende Zusatzausstattung bzw. Zubehör auf (z.B. Radio, Felgen, Navigationsgerät o. Ä.): </span>
                <span class="fillable_line wide"><input type="text" name="assurance.additional_eq"></span>
            </span>
        </li>
        <li>
            <input type="checkbox" name="assurance.has_prev_owner" checked="checked">
            <span class="cell">
                <span>Das Fahrzeug hatte nach Kenntnis des Verkäufers </span>
                <span class="fillable_line narrow"><input type="text" name="assurance.prev_owners"></span><span> Vorbesitzer.</span>
            </span>
        </li>
        <li>
            <span class="cell"></span>
            <span class="cell">
                <span>Das Fahrzeug wurde gewerblich genutzt, z.B. als Taxi, Miet- oder Fahrschulwagen </span>
                <span  class="vote">
                    <?= $data->cTaxi()?>
                </span>
            </span>
        </li>
        <li>
            <span class="cell"></span>
            <span class="cell">
            <span>Bei dem Fahrzeug handelt es sich um ein Importfahrzeug:</span>
                <span  class="vote">
                    <?= $data->cCountryVersion()?>
                </span>
            </span>
        </li>
    </ul>
    <p>
        <span class="h3">4. Zahlungsvereinbarung </span>
        <span class="small_text">(bitte ankreuzen)</span>
    </p>
    <p>
        <span>Der Käufer nutzt für die Bezahlung des Fahrzeugs die folgende Form: </span>
    </p>
    <ul>
        <li>
            <input type="checkbox" name="assurance.has_cash_purchase">
            <span class="cell">
                <span class="bold">Barkauf |</span>
                <span> Der Käufer zahlt den Bruttokaufpreis zuzüglich der beauftragen Nebenleistungen vollständig per Überweisung. Die Bankverbindung wird nach Annahme mitgeteilt.</span>
            </span>
        </li>
        <li>
            <input type="checkbox" name="assurance.has_financing" checked="checked">
            <span class="cell">
            <span class="bold">Finanzierung | </span>
            <span>Der Käufer zahlt den Bruttokaufpreis zuzüglich der beauftragen Nebenleistungen gemäß des innerhalb dieses Dokuments beantragten Finanzierungsantrages.</span>
        </span>
        </li>
    </ul>
    </form>
    <p>
        <span>Das Fahrzeug bleibt bis zur vollständigen Bezahlung des Kaufpreises im Eigentum des Verkäufers.</span>
    </p>
    <p>
        <span class="h3">5. Allgemeine Geschäftsbedingungen (AGB) des Verkäufers</span>
    </p>
    <p>
        <span>Dem Kaufvertrag zu Grunde liegen die AGB des Verkäufers, die diesem Vertrag als Anlage beigefügt sind. </span>
    </p>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="col3">
                <p>
                    <span>Ort, Datum</span>
                </p>
            </td>
            <td class="col12">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="col1">
                <p>
                    <span>Unterschrift Vertragsnehmer /  Kfz - Kaufvertrag</span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="ort_datum">
                       <input type="text" name="ort_datum">
                    </span>
                </p>
            </td>
            <td>
                <p>
                    <span></span>
                </p>
            </td>
            <td class="middle">
                <p>
                    <span class="grey_box">
                        &#10005;
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <p class="justify context">
        <span>Hinweis zur Haftung:</span><br>
        <span>auto.de haftet nicht für die Unrichtigkeit bzw. irrtümliche Rechtsanwendung und leistet keinen Ersatz für unerfüllte Ansprüche, die aus dem Kfz-Kaufvertrag abgeleitet werden können. Haftungsansprüche, die sich auf Schäden materieller oder ideeller Art beziehen, durch Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch Nutzung fehlerhafter oder unvollständiger Angaben verursacht, sind grundsätzlich ausgeschlossen, solange kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden von auto.de vorliegt. </span>
    </p>
</div>
<div class="page_body">
    <span class="h1 blue bottom_line">
        <?=$data->cMake()?> <?=$data->cModel()?> <?=$data->cSubModel()?>
    </span>
    <table cellspacing="0" cellpadding="0" class="car_info">
        <tbody>
        <tr>
            <td class="half">
                <img class="car_main_image" src="<?= $data->mainImage() ?? ''?>" alt="">
            </td>
            <td>
                <table cellspacing="0" cellpadding="0" class="basic_data_table wide">
                    <tr>
                        <td colspan="2"><p class="h2 blue blue_header normal">BASISDATEN</p></td>
                    </tr>
                    <?php if($data->cWasPrice() && $data->cWasPrice(true) != $data->cCurrentSalesPrice(true) && $data->cWasPrice(true) > $data->cCurrentSalesPrice(true)):?>
                        <tr>
                            <td class="one-tree">Finanzierung</td>
                            <td class="price"><span>statt </span><span class="through"><?= $data->oldMonthlyInstallment() ?> €</span><br>
                                <span class="red"><?= $data->monthlyInstallment() ?> €</span><span>/Monat</span></td>
                        </tr>
                        <tr>
                            <td>Preis</td>
                            <td class="price"><span>statt </span><span class="through"><?= money($data->cWasPrice())?> €</span><br>
                                <span class="red"><?= $data->cCurrentSalesPrice()?> €</span></td>
                        </tr>
                    <?php else: ?>
                        <tr>
                            <td class="one-tree">Finanzierung</td>
                            <td class="price"><span>ab monatl. </span><span class="red"><?= $data->monthlyInstallment() ?> €</span><span>/Monat</span></td>
                        </tr>
                        <tr>
                            <td>Preis</td>
                            <td class="price"> <span class="red"><?= $data->cCurrentSalesPrice()?> €</span></td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td>Marke</td>
                        <td><?=$data->cMake()?></td>
                    </tr>
                    <tr>
                        <td>Modell</td>
                        <td><?=$data->cModel()?></td>
                    </tr>
                    <tr>
                        <td><?=$data->cSubModel() ? 'Submodell' : '' ?></td>
                        <td><?=$data->cSubModel()?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="half">
                <table cellspacing="0" cellpadding="0" class="overview_table wide" style="margin-top: 13px;">
                    <tr>
                        <td colspan="2" class="<?= count($data->hightlights()) > 16 ? 'no_border' : ''?>"><p class="h2 blue blue_header normal">ÜBERBLICK</p></td>
                    </tr>
                    <tr>
                        <td class="one-tree">Kilometerstand</td>
                        <td><?= $data->cMileage()?></td>
                    </tr>
                    <tr>
                        <td>Erstzulassung</td>
                        <td><?= $data->cFirstRegistration()?></td>
                    </tr>
                    <tr>
                        <td>Fahrzeughalter</td>
                        <td><?= $data->cNumberOfPreviousOwners()?></td>
                    </tr>
                    <tr>
                        <td>Türen</td>
                        <td><?= $data->cDoors()?></td>
                    </tr>
                    <tr>
                        <td>Verfügbarkeit</td>
                        <td><?= $data->cAvailabilityMode()?></td>
                    </tr>
                    <tr>
                        <td>Fahrzeugzustand</td>
                        <td><?= $data->cCondition()?></td>
                    </tr>
                    <tr>
                        <td>Leistung</td>
                        <td><?= $data->cPower()?></td>
                    </tr>
                    <tr>
                        <td>Antrieb</td>
                        <td><?= $data->cDrive()?></td>
                    </tr>
                    <tr>
                        <td>Schaltung</td>
                        <td><?= $data->cGearbox()?></td>
                    </tr>
                    <tr>
                        <td>Kraftstoff</td>
                        <td><?= $data->cFuel()?></td>
                    </tr>
                    <tr>
                        <td>CO2-Ausstoß</td>
                        <td><?= $data->cCo2Comb()?></td>
                    </tr>
                    <tr>
                        <td>Verbrauch</td>
                        <td><?= $data->cConsumption()?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php if($data->cEnergyEfficiencyClass()):?>
                        <tr>
                            <td>CO-2-Effizienz<br>
                                <span class="context">
                                    *Auf der Grundlage der gemessenen CO2 Emissionen unter Berücksichtigung der Masse des Fahrzeugs ermittelt
                                </span>
                            </td>
                            <td>
                                <?= $data->CO2EfficiencyWidget() ?>
                            </td>
                        </tr>
                    <?php endif?>
                </table>
            </td>
            <td class="half" >
                <table cellspacing="0" cellpadding="0" class="highlights_table wide">
                    <tr>
                        <td colspan="2" class="<?= count($data->hightlights()) > 16 ? 'no_border' : ''?>"><p class="h2 blue blue_header normal">HIGHLIGHTS</p></td>
                    </tr>
                    <?php foreach($data->hightlights() as $key => $high): ?>
                        <tr>
                            <td style="<?= $data->hightlightStyles() ?>" ><img src="<?= image_path($high['icon'])?>"></td>
                            <td><?= $high['trans'] ?? ''?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="page_body" >
    <table cellspacing="0" cellpadding="0" class="car_info wide detail">
        <tbody>
        <tr>
            <td class="half">
                <table cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tr>
                        <td colspan="2" class="no_border">
                            <p class="h2 blue blue_header normal no_border">DATEN MOTOR UND GETRIEBE</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="half">Beschleunigung</td>
                        <td><?= $data->cAcceleration()?></td>
                    </tr>
                    <tr>
                        <td>Kraftstoffe</td>
                        <td><?= $data->cFuel()?></td>
                    </tr>
                    <tr>
                        <td>Zylinder</td>
                        <td><?= $data->cCylinders()?></td>
                    </tr>
                    <tr>
                        <td>Hubraum</td>
                        <td><?= $data->cCubicCapacity()?></td>
                    </tr>
                    <tr>
                        <td>Leistung</td>
                        <td><?= $data->cPower()?></td>
                    </tr>
                    <tr>
                        <td>Drehmoment</td>
                        <td><?= $data->cTorque()?></td>
                    </tr>
                    <tr>
                        <td>Höchstgeschwindigkeit</td>
                        <td><?= $data->cHighSpeed()?></td>
                    </tr>
                    <tr>
                        <td>Getriebe</td>
                        <td><?= $data->cGearbox()?></td>
                    </tr>
                    <tr>
                        <td>Antrieb</td>
                        <td><?= $data->cDrive()?></td>
                    </tr>
                    <tr>
                        <td>Tankvolumen</td>
                        <td><?= $data->cFuelCapacity()?></td>
                    </tr>
                    <tr>
                        <td>HSN</td>
                        <td><?= $data->cHsn()?></td>
                    </tr>
                    <tr>
                        <td>TSN</td>
                        <td><?= $data->cTsn()?></td>
                    </tr>
                </table>
            </td>
            <td class="half">
                <table cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tr>
                        <td colspan="2" class="no_border">
                            <p class="h2 blue blue_header normal">MAßE UND ABMESSUNGEN</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="half">Türen</td>
                        <td><?= $data->cDoorsN()?></td>
                    </tr>
                    <tr>
                        <td>Länge</td>
                        <td><?= $data->cLength()?></td>
                    </tr>
                    <tr>
                        <td>Breite</td>
                        <td><?= $data->cWidth()?></td>
                    </tr>
                    <tr>
                        <td>Höhe</td>
                        <td><?= $data->cHeight()?></td>
                    </tr>
                    <tr>
                        <td>Radstand</td>
                        <td><?= $data->сWheelBase()?></td>
                    </tr>
                    <tr>
                        <td>Ladevolumen</td>
                        <td><?= $data->cCapacityLoad()?></td>
                    </tr>
                    <tr>
                        <td>Kofferraumvolumen</td>
                        <td><?= $data->cCargoCapacity()?></td>
                    </tr>
                    <tr>
                        <td>Sitze</td>
                        <td><?= $data->cSeats()?></td>
                    </tr>
                    <tr>
                        <td>Leergewicht</td>
                        <td><?= $data->cTare()?></td>
                    </tr>
                    <tr>
                        <td>Zulässiges Gesamtgewicht</td>
                        <td><?= $data->cCargoCapacity()?></td>
                    </tr>
                    <tr>
                        <td>Anhängelast (gebremst) </td>
                        <td><?= $data->cTrailerWeightBraked()?></td>
                    </tr>
                    <tr>
                        <td>Anhängelast (ungebremst)</td>
                        <td><?= $data->cTrailerWeightUnbraked()?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="half">
                <table cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tr>
                        <td colspan="2" class="no_border">
                            <p class="h2 blue blue_header normal no_border">UMWELT</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 60%;">Verbrauch innerorts</td>
                        <td><?= $data->consumptionInner()?></td>
                    </tr>
                    <tr>
                        <td>Verbrauch außerorts</td>
                        <td><?= $data->consumptionOuter()?></td>
                    </tr>
                    <tr>
                        <td>Verbrauch (komb.)* </td>
                        <td><?= $data->consumptionCombined()?></td>
                    </tr>
                    <tr>
                        <td>CO2-Ausstoß (komb.)*</td>
                        <td><?= $data->cCo2()?></td>
                    </tr>
                    <tr>
                        <td>Emissionsklasse </td>
                        <td><?= $data->cEmissionClass()?></td>
                    </tr>
                    <tr>
                        <td>Feinstaubplakette</td>
                        <td><?= $data->emissionSticker()?></td>
                    </tr>
                    <?php if($data->cEnergyEfficiencyClass()):?>
                        <tr>
                            <td>CO-2-Effizienz<br>
                                <span class="context">
                                    *Auf der Grundlage der gemessenen CO2 Emissionen unter Berücksichtigung der Masse des Fahrzeugs ermittelt
                                </span>
                            </td>
                            <td>
                                <?= $data->CO2EfficiencyWidget() ?>
                            </td>
                        </tr>
                    <?php endif?>
                </table>
            </td>
            <td class="half">
                <table cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tr>
                        <td colspan="2" class="no_border">
                            <p class="h2 blue blue_header normal no_border">ZUSTAND UND VERFÜGBARKEIT</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="half">Verfügbarkeit</td>
                        <td><?= $data->cAvailabilityMode()?></td>
                    </tr>
                    <tr>
                        <td class="half">Hauptuntersuchung</td>
                        <td><?= $data->cGeneralInspection()?></td>
                    </tr>
                    <tr>
                        <td class="half">Fahrzeugzustand</td>
                        <td><?= $data->cCondition()?></td>
                    </tr>
                    <tr>
                        <td class="half">Fahrzeughalter</td>
                        <td><?= $data->cNumberOfPreviousOwnersN()?></td>
                    </tr>
                    <tr>
                        <td class="half">Garantie</td>
                        <td><?= $data->cWarranty()?></td>
                    </tr>
                    <tr>
                        <td class="half">Scheckheftgepflegt</td>
                        <td><?= $data->cFullServiceHistory()?></td>
                    </tr>
                    <tr>
                        <td class="half">Nichtraucherfahrzeug</td>
                        <td><?= $data->cNonSmokerVehicle()?></td>
                    </tr>

                </table>
                <table cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tr>
                        <td colspan="2" class="no_border">
                            <p class="h2 blue blue_header normal no_border">FARBE UND MATERIAL</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="half">Farbe (Hersteller)</td>
                        <td><?= $data->cManufacturerColorName()?></td>
                    </tr>
                    <tr>
                        <td class="half">Farbe</td>
                        <td><?= $data->cExteriorColor()?></td>
                    </tr>
                    <tr>
                        <td class="half">Ausstattungsfarbe</td>
                        <td><?= $data->cInteriorColor()?></td>
                    </tr>
                    <tr>
                        <td class="half">Innenausstattung</td>
                        <td><?= $data->cInteriorType()?></td>
                    </tr>

                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="page_body" >
    <table cellspacing="0" cellpadding="0" class="car_info wide detail equipment">
        <tbody>
        <tr>
            <td colspan="3" class="no_border">
                <p class="h2 blue blue_header normal no_border">AUSSTATTUNG</p>
            </td>
        </tr>
        <?= $data->extraWidget() ?>
        </tbody>
    </table>
</div>
<?php if($data->count_images()):?>
    <div class="page_body">
        <table cellspacing="0" cellpadding="0" class="images">
            <tbody>
            <tr>
                <?php foreach($data->images() as $key => $image): ?>
                <?php if($key == 2):?>
            </tr>
            </tbody>
        </table>
        <table cellspacing="0" cellpadding="0" class="images">
            <tbody>
            <tr>
                <?php endif; ?>
                <?php if ($key > 3 && ++$key % 3 == 0): ?>
            </tr>
            <tr>
                <?php endif; ?>
                <td class="<?= $key < 2 ? 'half' : 'one-tree'?>"><img src="<?= $image?>" alt=""></td>

                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<div class="page_body" >
    <p>
        <span class="h2">Bevollmächtigung &amp; Vermittlungsauftrag</span>
    </p>
    <p>
        <span class="h3">Verbindlicher Vermittlungsauftrag zum Erwerb eines Autos / Bestellvollmacht</span>
    </p>
    <p>
        <span>Hiermit bevollmächtigt und beauftragt der Vertragsnehmer auto.de | VICUS Media GmbH, Thomaskirchhof 20, 04109 Leipzig, das o.g. Fahrzeuges im Rahmen des Vermittlungsvertrages zwischen auto.de und seinem Partnerhändler zu bestellen sowie jede Erklärung abzugeben, die für die Durchführung des Vermittlungsvertrages notwendig ist. </span>
    </p>
    <p>
        <span>Gleiches gilt für die Durchführung sämtlicher Dienstleistungen die im Rahmen des Vertragsverhältnisses zwischen dem Vertragsnehmer und auto.de sowie gegen über den weiteren Partnern von auto.de notwendig ist. Auch hierfür erteilt der Vertragspartner auto.de die entsprechende Vollmacht / Beauftragung.</span>
    </p>
    <br>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="col3">
                <p>
                    <span>Ort, Datum</span>
                </p>
            </td>
            <td class="col12">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="col1">
                <p>
                    <span>Unterschrift Vertragsnehmer / Bevollmächtigung & Vermittlungsauftrag</span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="ort_datum">
                       <input type="text" name="ort_datum">
                    </span>
                </p>
            </td>
            <td>
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="middle">
                <p>
                    <span class="grey_box">
                        &#10005;
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="page_body">
    <p>
        <span class="h1">Vertragsdetails</span>
    </p>
    <p>
        <span class="bold">&nbsp;</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="wide contract_details">
        <tbody>
        <tr>
            <td class="one-tree">
                <p>
                    <span class="bold">Vertragsnehmer</span>
                </p>
            </td>
            <td  class="one-tree">
                <p>
                    <span><?=$data->rSalutation()?> <?=$data->rFirstName()?> <?=$data->rLastName()?></span><br>
                    <span><?=$data->rStreet()?> <?=$data->rNumber()?></span><br>
                    <span><?=$data->rZip()?> <?=$data->rCity()?></span><br>
                </p>
            </td>
            <td  class="one-tree">
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="bold">Vertragsgeber</span>
                </p>
            </td>
            <td>
                <p>
                    Im Rahmen des
                    Finanzierungsvergleiches
                    teilen wir Ihnen kurzfristig
                    die finanzierende Bank mit.
                </p>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="bold">Vertragstyp</span>
                </p>
            </td>
            <td>
                <p>
                    <span>Finanzierung für Autokauf</span>
                </p>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="bold">Fahrzeug</span>
                </p>
            </td>
            <td>
                <p>
                    <span><?= $data->cCondition()?></span><br>
                    <span>Erstzulassung: <?= $data->cFirstRegistration()?></span><br>
                    <span>Kilometerstand: <?= $data->cMileage()?></span><br>
                </p>
            </td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <p>
        <span class="bold">&nbsp;</span>
    </p>
    <?= $data->financeDetailWidget() ?>
</div>
<div class="page_body" >
    <p>
        <span class="h1">Selbstauskunft Privatpersonen</span>
    </p>
    <p>
        <span class="h2">Erster Antragsteller</span>
    </p>
    <p>
        <span class="h2">Persönliche Daten 1. Antragsteller</span>
    </p>
    <p>
        <span>Bitte tragen Sie in den folgenden Feldern genau die Daten ein, die in Ihrem Ausweis vermerkt sind.</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="wide unfillform">
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Anrede</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.salutation">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Nachname</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.lastName">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Vorname</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.firstName">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Geburtstag</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.birthday">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Geburtsname (optional)</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.birth_name">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Nationalität</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.nationality">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">Personalausweis - oder <br>Reisepassnummer</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.passport_number">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Ausstellende Behörde</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.issuing_authority">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">Personalausweis oder <br>Reisepass gültig bis</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.passport_valid_until">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="br no_border"></td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>PLZ und Ort</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.zip_city">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Straße und Hausnummer</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.street_number">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Dort wohnhaft seit</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.residing_there_since">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Telefon (Mobil)</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.phoneMobile">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Telefon (Festnetz)</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.phoneMain">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>E-Mail</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.email">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="br no_border"></td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Familienstand</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.marital_status">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Im Haushalt lebende Personen</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.household_persons">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="br no_border"></td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Bankverbindung - IBAN</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.bankverbindung_1">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span style="padding-left: 90px">BIC</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_first_applicant.bankverbindung_1">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="page_body">
    <p>
        <span class="h2">Berufliche Angaben 1. Antragsteller</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="wide vote">
        <tbody>
        <tr>
            <td style="width: 35%">
                <span>Berufsverhältnis</span>
            </td>
            <td>
                <span><input type="checkbox" name="Arbeiter">&nbsp; Arbeiter/-in</span><br>
                <span><input type="checkbox" name="Angestellte">&nbsp; Angestellte/r</span><br>
                <span><input type="checkbox" name="Selbständig">&nbsp; Selbständig*</span><br>
            </td>
            <td>
                <span><input type="checkbox" name="Beamtin">&nbsp; Beamtin/-er</span><br>
                <span><input type="checkbox" name="Rentner_altersbedingt">&nbsp; Rentner/-in (altersbedingt)</span><br>
                <span><input type="checkbox" name="Hausfrau_mann">&nbsp; Hausfrau/-mann</span><br>
            </td>
        </tr>
        </tbody>
    </table>
    <br>
    <table cellspacing="0" cellpadding="0" class="unfillform">
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Berufsbezeichnung/Branche</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.occupation">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">Firmenname des Arbeitgebers/Unternehmens</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.company_name">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">PLZ und Ort des Arbeitgebers/Unternehmens</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.company_zip">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">Beschäftigt seit <br>(MM/JJJJ)</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.employed_since">
                </div>
            </td>
        </tr>
        <tr>
            <td class="top">
                <p>
                    <span>Arbeitsverhältnis</span>
                </p>
            </td>
            <td class="one-tree top">
                <p>
                    <span><input type="checkbox" name="professional_data_first_applicant.limited">&nbsp; befristet</span>
                </p>
            </td>
            <td class="one-tree top" >
                <span><input type="checkbox" name="professional_data_first_applicant.permanent">&nbsp; unbefristet </span><br>
                <span>(Zeitraum der Befristung angeben)</span><br>
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.specify_period_limitation">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">*Gründungsdatum des Unternehmens</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.founding_date_company">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <p>
        <span>*für gewerblich Selbstständige</span>
    </p>
    <p>
        <span class="h2">Regelmäßige monatliche Einnahmen 1. Antragsteller</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="unfillform wide">
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Nettoeinkommen monatlich in €</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.net_income_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Anzahl der unterhaltspflichtigen Kinder</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.number_dependent_children">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Anzahl kindergeldberechtigter Kinder</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.number_children_entitled_children">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Weitere Einkünfte monatlich in €</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.further_income_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Unterhaltseingang monatlich in €</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.maintenance_receipt_monthly">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
<!--</div>-->
<!--<div class="page_body">-->
    <p>
        <span class="h2">Regelmäßige monatliche Ausgaben 1. Antragsteller</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="unfillform wide">
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Wohnart</span>
                </p>
            </td>
            <td class="one-tree no_border">
                <span><input type="checkbox" name="professional_data_first_applicant.rental_fee">&nbsp; Miete</span><br>
                <span><input type="checkbox" name="professional_data_first_applicant.condominium">&nbsp; Eigentumswohnung</span>
            </td>
            <td class="one-tree no_border">
                <span><input type="checkbox" name="professional_data_first_applicant.living_with_parents">&nbsp; wohnhaft bei den Eltern</span><br>
                <span><input type="checkbox" name="professional_data_first_applicant.house">&nbsp; Haus</span>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Warmmiete pro Monat in €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.warm_rent_month">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Weitere Ausgaben monatlich €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.further_issues_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Weitere Einkünfte monatlich in €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.further_income_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Unterhaltseingang monatlich in €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.maintenance_receipt_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Kosten für Hypothek im Monat in €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_first_applicant.cost_mortgage_month">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="page_body" >
    <p>
        <span class="h2">Zweiter Antragsteller</span>
    </p>
    <p>
        <span>Wenn Sie einen zweiten Antragsteller in Ihrem Kreditvertrag aufnehmen, hat das unter Umständen positive Auswirkungen auf die Wahrscheinlichkeit einer Bewilligung Ihres Finanzierungsantrages. Hierzu benötigt auto.de auch die persönlichen Daten Ihres Mitantragssteller.</span>
    </p>
    <p>
        <span class="h2">Persönliche Daten 2. Antragsteller</span>
    </p>
    <p>
        <span>Bitte tragen Sie in den folgenden Feldern die Daten des 2. Antragstellers ein</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="unfillform wide">
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Anrede</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.salutation">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Nachname</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.lastName">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Vorname</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.firstName">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Geburtstag</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.birthday">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Geburtsname (optional)</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.birth_name">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Nationalität</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.nationality">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">Personalausweis - oder <br>Reisepassnummer</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.passport_number">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Ausstellende Behörde</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.issuing_authority">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">Personalausweis oder <br>Reisepass gültig bis</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.passport_valid_until">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="br no_border"></td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>PLZ und Ort</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.zip_city">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Straße und Hausnummer</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.street_number">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Dort wohnhaft seit</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.residing_there_since">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Telefon (Mobil)</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.phoneMobile">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Telefon (Festnetz)</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.phoneMain">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>E-Mail</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.email">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="br no_border"></td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Familienstand</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.marital_status">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Im Haushalt lebende Personen</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="personal_data_second_applicant.household_persons">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="page_body">
    <p>
        <span class="h2">Berufliche Angaben 2. Antragsteller</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="wide vote">
        <tbody>
        <tr>
            <td style="width: 35%">
                <span>Berufsverhältnis</span>
            </td>
            <td>
                <span><input type="checkbox" name="professional_data_second_applicant.arbeiter">&nbsp; Arbeiter/-in</span><br>
                <span><input type="checkbox" name="professional_data_second_applicant.angestellte">&nbsp; Angestellte/r</span><br>
                <span><input type="checkbox" name="professional_data_second_applicant.selbständig">&nbsp; Selbständig*</span><br>
            </td>
            <td>
                <span><input type="checkbox" name="professional_data_second_applicant.beamtin">&nbsp; Beamtin/-er</span><br>
                <span><input type="checkbox" name="professional_data_second_applicant.rentner_altersbedingt">&nbsp; Rentner/-in (altersbedingt)</span><br>
                <span><input type="checkbox" name="professional_data_second_applicant.hausfrau_mann">&nbsp; Hausfrau/-mann</span><br>
            </td>
        </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" class="unfillform">
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Berufsbezeichnung/Branche</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.occupation">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">Firmenname des Arbeitgebers/Unternehmens</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.company_name">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">PLZ und Ort des Arbeitgebers/Unternehmens</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.company_zip">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">Beschäftigt seit <br>(MM/JJJJ)</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.employed_since">
                </div>
            </td>
        </tr>
        <tr>
            <td class="top">
                <p>
                    <span>Arbeitsverhältnis</span>
                </p>
            </td>
            <td class="one-tree top">
                <p>
                    <span><input type="checkbox" name="professional_data_second_applicant.limited">&nbsp; befristet</span>
                </p>
            </td>
            <td class="one-tree top" >
                <span><input type="checkbox" name="professional_data_second_applicant.permanent">&nbsp; unbefristet </span><br>
                <span>(Zeitraum der Befristung angeben)</span><br>
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.specify_period_limitation">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="small">*Gründungsdatum des Unternehmens</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.founding_date_company">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <p>
        <span class="h2">Regelmäßige monatliche Einnahmen 2. Antragsteller</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="unfillform wide">
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Nettoeinkommen monatlich in €</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.net_income_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Anzahl der unterhaltspflichtigen Kinder</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.number_dependent_children">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Anzahl kindergeldberechtigter Kinder</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.number_children_entitled_children">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Weitere Einkünfte monatlich in €</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.further_income_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Unterhaltseingang monatlich in €</span>
                </p>
            </td>
            <td>
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.maintenance_receipt_monthly">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <p>
        <span class="h2">Regelmäßige monatliche Ausgaben 2. Antragsteller</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="unfillform wide">
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Wohnart</span>
                </p>
            </td>
            <td class="one-tree no_border">
                <span><input type="checkbox" name="professional_data_second_applicant.rental_fee">&nbsp; Miete</span><br>
                <span><input type="checkbox" name="professional_data_second_applicant.condominium">&nbsp; Eigentumswohnung</span>
            </td>
            <td class="one-tree no_border">
                <span><input type="checkbox" name="professional_data_second_applicant.living_with_parents">&nbsp; wohnhaft bei den Eltern</span><br>
                <span><input type="checkbox" name="professional_data_second_applicant.house">&nbsp; Haus</span>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Warmmiete pro Monat in €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.warm_rent_month">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Weitere Ausgaben monatlich €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.further_issues_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Weitere Einkünfte monatlich in €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.further_income_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Unterhaltseingang monatlich in €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.maintenance_receipt_monthly">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span>Kosten für Hypothek im Monat in €</span>
                </p>
            </td>
            <td colspan="2">
                <div class="form_field">
                    <input type="text" name="professional_data_second_applicant.cost_mortgage_month">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="page_body">
    <span class="h1">Ihr Finanzierungsantrag</span>
    <p class="justify">
        <span>Der  Antragsteller  beantragt  unter  Einbeziehung  der  Datenschutzbestimmungen  sowie  ggf.  der  Allgemeinen  Geschäfts-bedingungen  des  finanzierenden  Kreditinstituts  bzw.  des  Kreditvermittlers  den  Abschluss  eines  Finanzierungsvertrags  für  das o.g. Fahrzeug. </span>
    </p>
    <p class="justify">
        <span>Sofern nicht als Servicekomponente im Finanzierungsvertrag enthalten, werden Ihre zusätzlichen Services und Logistikleistungen gesondert berechnet. Die Servicekomponenten können Sie dem Anhang „Ihre gewählten zusätzlichen Services“ entnehmen.</span>
    </p>
    <p class="justify">
        <span>Alle mit einzureichenden Vertragsunterlagen sind in der „auto.de Checkliste“ definiert und für die Vertragsumsetzung erforderlich.</span>
    </p>
    <p class="justify">
        <span>Hiermit bestätige ich, dass ich spätestens mit Erhalt des Kreditvertragsangebots durch das finanzierende Kreditinstitut bzw. den Kreditvermittler die Antragsunterlagen, samt notwendiger Unterlagen, im Original an diesen Partner bzw. auto.de sende.</span>
    </p>
    <p class="justify">
        <span>Die Datenschutzhinweise des finanzierenden Kreditinstituts bzw. des Kreditvermittlers sowie die Datenschutzinformation für den Bonitätsprüfungsprozess inklusive der Datenübermittlung und Datenerfassung sowie den Hinweis auf Datenübermittlung an die SCHUFA habe ich im Rahmen der auto.de Datenschutzbestimmungen erhalten und zur Kenntnis genommen.</span>
    </p>
    <p></p>
    <p>
        <span>Restschuldversicherung</span>
    </p>
    <table cellspacing="0" cellpadding="0" >
        <tbody>
        <tr>
            <td class="col8 top center">
                <p>
                    <span><input type="checkbox" name="payment_protection_insurance"></span>
                </p>
            </td>
            <td>
                <p>
                    <span>Ja, ich möchte zu meiner eigenen Absicherung eine Restschuldversicherung abschließen. Bitte unterbreiten Sie mir hierfür ein Angebot.</span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <p >
        <span>&nbsp;</span>
    </p>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="col3">
                <p>
                    <span>Ort, Datum</span>
                </p>
            </td>
            <td class="col12">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="col1">
                <p>
                    <span>Unterschrift Vertragsnehmer / Finanzierungsantrag</span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="ort_datum">
                       <input type="text" name="ort_datum">
                    </span>
                </p>
            </td>
            <td>
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="middle">
                <p>
                    <span class="grey_box">
                        &#10005;
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<!--<div class="page_body">
    <p>
        <span class="h1">SEPA-Lastschriftmandat</span>
    </p>
    <p>
        <span class="small">Gläubiger - Identifikationsnummer: DE95ZZZ00000029590 <br>Ihre Mandatsreferenz zum SEPA-Lastschriftmandat wird Ihnen separat mitgeteilt.</span>
    </p>
    <p>
        <span class="small">Ich ermächtige die Santander Consumer Bank AG, Zahlungen von meinem Konto mittels Lastschrift einzuziehen. Zugleich weise ich mein Kreditinstitut an, die von der Santander Consumer Bank AG auf mein Konto gezogenen Lastschriften einzulösen.</span>
    </p>
    <p>
        <span class="bold small">Hinweis:</span>
        <span class="small"> Ich kann innerhalb von acht Wochen, beginnend mit dem Belastungsdatum, die Erstattung des belasteten Betrages verlangen. Es gelten dabei die mit meinem Kreditinstitut vereinbarten Bedingungen.</span>
    </p>
    <p>
        <span class="bold small">Wiederkehrende Zahlungen:</span>
        <span class="small"> Dieses Mandat kann für wiederkehrende Zahlungen verwendet werden.</span>
    </p>
    <table cellspacing="0" cellpadding="0" >
        <tbody>
        <tr >
            <td colspan="2" class="half">
                <p >
                    <span class="h2">Kontoinhaber*</span>
                </p>
            </td>
            <td class="col12">
                <p >
                    <span class="bold">&nbsp;</span>
                </p>
            </td>
            <td class="half">
                <p >
                    <span class="h2">Kontoverbindung</span>
                </p>
            </td>
        </tr>
        <tr class="field_title">
            <td colspan="2" >
                <p >
                    <span>Vorname Name, Firma*</span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td >
                <p >
                    <span>Name und Sitz des Kreditinstituts*</span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="fields_color">
                <p>
                    <span>
                        <input type="text" name="owner_name">
                    </span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="fields_color">
                <p>
                    <span>
                        <input type="text" name="bank_name">
                    </span>
                </p>
            </td>
        </tr>
        <tr class="field_title">
            <td colspan="2" >
                <p >
                    <span>Straße Nr.*</span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td >
                <p >
                    <span>IBAN*</span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="fields_color">
                <p>
                    <span>
                        <input type="text" name="owner_street">
                    </span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="fields_color">
                <p>
                    <span>
                        <input type="text" name="bank_iban">
                    </span>
                </p>
            </td>
        </tr>
        <tr class="field_title">
            <td >
                <p >
                    <span>PLZ*</span>
                </p>
            </td>
            <td >
                <p >
                    <span>Wohnort*</span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td >
                <p >
                    <span>BIC*</span>
                </p>
            </td>
        </tr>
        <tr>
            <td class="fields_color col8">
                <p>
                    <span>
                        <input type="text" name="owner_plz">
                    </span>
                </p>
            </td>
            <td class="fields_color">
                <p>
                    <span>
                        <input type="text" name="owner_place_of_residence">
                    </span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="fields_color">
                <p>
                    <span>
                        <input type="text" name="bank_bic">
                    </span>
                </p>
            </td>
        </tr>
        <tr class="field_title">
            <td colspan="2" >
                <p >
                    <span>Telefonnummer für Rückfragen*</span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="fields_color">
                <p >
                    <span><input type="text" name="owner_phone"></span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" >
        <tbody>
        <tr>
            <td colspan="2" >
                <p>
                    <h2 class="h2">Zahlungsempfängerin</h2>
                </p>
            </td>
            <td></td>
        </tr>
        <tr>
            <td class="col4">
                <span>Name:</span>
            </td>
            <td>
                <span>Santander Consumer Bank AG</span>
            </td>
        </tr>
        <tr>
            <td >
                <span>Gläubiger-ID:</span>
            </td>
            <td>
                <span>DE95ZZZ00000029590</span>
            </td>
        </tr>
        <tr>
            <td >
                <span>Straße und Hausnummer:</span>
            </td>
            <td>
                <span>Santander-Platz 1</span>
            </td>
        </tr>
        <tr>
            <td >
                <span>Postleitzahl und Ort:</span>
            </td>
            <td>
                <span>41061 Mönchengladbach</span>
            </td>
        </tr>
        <tr>
            <td >
                <span>Land:</span>
            </td>
            <td>
                <span>Deutschland</span>
            </td>
        </tr>
        </tbody>
    </table>
    <p >
        <span>Das Mandat muss an auto.de oder die Zahlungsempfängerin im Original übergeben werden.</span>
    </p>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="col3">
                <p>
                    <span>Ort, Datum</span>
                </p>
            </td>
            <td class="col12">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="col1">
                <p>
                    <span>Unterschrift Vertragsnehmer / Antragsteller</span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="grey_box">
                       &nbsp;
                    </span>
                </p>
            </td>
            <td>
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="middle">
                <p>
                    <span class="grey_box">
                        &#10003;
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <p>
        <span class="h2">Vereinbarung zur Fristverkürzung für den Versand Vorabinformation</span>
    </p>
    <p class="justify small">
        <span>Die Santander Consumer Bank AG wird die vereinbarten Zahlungen von dem im ihr erteilten SEPA-Lastschriftmandat angegebenen Konto des Kontoinhabers zum jeweiligen, vertraglich vereinbarten, Fälligkeitszeitpunkt einziehen. Das Konto des Kontoinhabers wird dann gleichtägig in Höhe der vereinbarten Zahlungen belastet.</span>
    </p>
    <p >
        <span class="h2">Feststellung des wirtschaftlich Berechtigten nach dem Geldwäschegesetz (GWG)*</span>
    </p>
    <ul>
        <li><span>&#x025A1; &nbsp; Ich handle im eigenen wirtschaftlichen Interesse und nicht auf fremde Veranlassung (insbesondere nicht als Treuhändler) oder</span></li>
        <li><span>&#x025A1; &nbsp; Ich handle nicht auf eigene Veranlassung und wurde von einem Dritten (wirtschaftlich Berechtigter) hierzu beauftragt **</span></li>
    </ul>
    <p class="underline">
        <span >&nbsp;</span>
    </p>
    <span class="context">Name, Vorname, Firma, Verband usw. mit Adresse </span>
    <p>
        <span>Bei weiteren wirtschaftlich Berechtigten legen Sie bitte ein separates Blatt bei.</span>
    </p>
    <ul>
        <li>
            <span class="small">&#x025A1; &nbsp; Ich bin weder eine politisch exponierte Person (PEP), noch ein Familienmitglied oder eine nahestehende Person einer PEP</span>
        </li>
    </ul>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="col3">
                <p>
                    <span>Ort, Datum</span>
                </p>
            </td>
            <td class="col12">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="col1">
                <p>
                    <span>Unterschrift Vertragsnehmer / Antragsteller</span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="grey_box">
                       &nbsp;
                    </span>
                </p>
            </td>
            <td>
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="middle">
                <p>
                    <span class="grey_box">
                        &#10003;
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <p >
        <span class="context">* Bitte alle Pflichtfelder ausfüllen.</span>
    </p>
    <p >
        <span class="context">** Bei juristischen Personen sind ein aktueller Handelsregisterauszug oder vergleichbare Unterlagen und, sofern Gesellschafter mit 25% und mehr an der juristischen Person beteiligt sind, auch eine aktuelle Gesellschafterliste oder vergleichbare Unterlagen beizufügen.</span>
    </p>
    <div >
        <p >
            <span>&nbsp;</span>
        </p>
    </div>
</div>-->
<div class="page_body">
    <table cellspacing="0" cellpadding="0" class="wide additional_services">
        <tbody>
        <tr>
            <td style="width: 80%; height: 50px">
                <span class="h1">Ihre zusätzlichen Services</span>
            </td>
            <td>
                <span class="context">(alle Angaben inkl. 19 % MwSt.)</span>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <span class="bold">Auslieferung</span><span class="context"> (bitte ankreuzen)</span>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        <input type="checkbox" name="additional_services.Abholung">
                        <span class="cell">
                            <span class="bold">Abholung |</span>
                            <span> beim auto.de-Partnerhändler im PLZ-Gebiet <?= substr( $data->uZip(), 0,2)?>xxx </span>
                            <span class="context">(Montag bis Freitag).</span>
                        </span>
                    </li>
                </ul>
            </td>
            <td class="right">
                <span>0,00 €</span>
            </td>
        </tr>
        <tr>
            <td >
                <ul>
                    <li>
                        <input type="checkbox" name="additional_services.Anlieferung">
                        <span class="cell">
                            <span class="bold small">Anlieferung |</span>
                            <span> auto.de liefert Ihnen Ihr Auto direkt und bequem nach Hause</span>
                        </span>
                    </li>
                </ul>
            </td>
            <td  class="right">
                <span>499,00 €</span>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <span class="bold">Zulassung </span><span class="context">(bitte ankreuzen)</span>
            </td>
        </tr>
        <tr>
            <td >
                <ul>
                    <li>
                        <input type="checkbox" name="additional_services.Standard">
                        <span class="cell">
                            <span class="bold small">Standard |</span>
                            <span class="small"> auto.de kümmert sich um die Zulassung Ihres Autos und stimmt notwendige Schritte mit Ihnen ab (Dauer ca. 7 Tage)</span>
                        </span>
                    </li>
                </ul>
            </td>
            <td  class="right">
                <span>149,00 €</span>
            </td>
        </tr>
        <tr>
            <td >
                <ul>
                    <li>
                        <input type="checkbox" name="additional_services.Express">
                        <span class="cell">
                            <span class="bold small">Express |</span>
                            <span class="small"> auto.de kümmert sich im Expresstempo um die Zulassung Ihres Autos und stimmt notwendige Schritte mit Ihnen ab (Dauer ca. 2 Tage)</span>
                        </span>
                    </li>
                </ul>
            </td>
            <td class="right">
                <span>249,00 €</span>
                <p>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        <input type="checkbox" name="additional_services.Wunschkennzeichen">
                        <span class="cell">
                            <span class="bold small">Wunschkennzeichen |</span>
                            <span class="small"> auto.de kümmert sich um Ihr Wunschkennzeichen</span>
                        </span>
                    </li>
                </ul>
            </td>
            <td class="right">
                <span>49,00 €</span>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        <span class="cell" style="width: 7px"></span>
                        <span class="bold small cell" style="width: 400px">
                            Bitte geben Sie hier Ihr Wunschkennzeichen an:
                            <span class="form_field narrow"><input type="text" name="desired_1" style="width: 25px;"></span>
                             -
                            <span class="form_field narrow"><input type="text" name="desired_2" style="width: 25px;"></span>
                        &nbsp;   <span class="form_field narrow"><input type="text" name="desired_3" style="width: 55px;"></span>
                        </span>
                    </li>
                </ul>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <span class="bold small">Finanzierung </span><span class="context">(bitte ankreuzen)</span>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <ul><li>
                        <input type="checkbox" name="additional_services.Finanzierung">
                        <span class="cell bold small">Bitte unterbreiten Sie mir im Rahmen des Finanzierungsantrags eine Option, die zusätzlichen Services über der Laufzeit mit zu finanzieren.</span>
                    </li></ul>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <span class="bold ">Versicherung </span><span class="context">(bitte ankreuzen und ausfüllen)</span>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <ul>
                    <li>
                        <input type="checkbox" name="additional_services.Versicherung">
                        <span class="bold small cell" style="width: 500px">Bitte unterbreiten Sie mir ein Angebot für die Versicherung des Fahrzeugs.</span>
                    </li>
                </ul>
            </td>
        </tr>
        </tbody>
    </table>
    <table>
        <tbody>
        <tr>
            <td style="width: 38px"></td>
            <td style="width: 45%;">
                <p >
                    <span>Meine Schadensfreiheitsklassen: </span>
                </p>
            </td>
            <td>
                <p >
                    <span>Haftpflichtversicherung</span>
                </p>
            </td>
            <td >
                <p >
                    <span>SF</span>
                </p>
            </td>
            <td >
                <div class="form_field narrow">
                    <input type="text" name="liability_insurance">
                </div>
            </td>
        </tr>
        <tr >
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td >
                <p >
                    <span>&nbsp;</span>
                </p>
            </td>
            <td >
                <p >
                    <span>Vollkaskoversicherung</span>
                </p>
            </td>
            <td >
                <p >
                    <span>SF</span>
                </p>
            </td>
            <td >
                <div class="form_field narrow">
                    <input type="text" name="comprehensive_insurance">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <p class="divider"></p>
    <p >
        <span class="bold">Liefertermin</span><br>
        <span class="small">Die Auslieferung Ihres Fahrzeuges erfolgt schnellstmöglich. Ihr auto.de Berater wird sich zur Terminabstimmung im Rahmen des Kaufprozesses in Verbindung setzen.</span>
    </p>
    <p>
        <span class="bold">Optional:</span>
    </p>
    <p >
        <span>Zuständige Zulassungsbehörde für den Versand des Fahrzeugbriefes vor Fahrzeugauslieferung.</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="optional">
        <tbody>
        <tr>
            <td >
                <span >Behörde:</span>
            </td>
            <td >
                <div class="form_field">
                    <input type="text" name="delivery.office">
                </div>
            </td>
        </tr>
        <tr>
            <td >
                <span >Straße:</span>
            </td>
            <td >
                <div class="form_field">
                    <input type="text" name="delivery.street">
                </div>
            </td>
        </tr>
        <tr>
            <td >
                <span >Postleitzahl:</span>
            </td>
            <td >
                <div class="form_field">
                    <input type="text" name="delivery.zip">
                </div>
            </td>
        </tr>
        <tr>
            <td >
                <span >Ort:</span>
            </td>
            <td >
                <div class="form_field">
                    <input type="text" name="delivery.ort">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" style="margin-top: 20px;">
        <tbody>
        <tr>
            <td class="col3">
                <p>
                    <span>Ort, Datum</span>
                </p>
            </td>
            <td class="col12">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="col1">
                <p>
                    <span>Unterschrift Vertragsnehmer | zusätzliche Services</span>
                </p>
            </td>
        </tr>
        <tr >
            <td style="height: 20px">
                <p>
                    <span class="ort_datum">
                       <input type="text" name="ort_datum">
                    </span>
                </p>
            </td>
            <td style="height: 20px">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="middle" style="height: 20px">
                <p>
                    <span class="grey_box">
                        &#10005;
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="page_body lastpage" >
    <span class="pretitle normal" >
        Thomaskirchhof 20<br>
        <span class="pretitle">04109 Leipzig</span><br>
    </span>
    <div style="width: 100%;height: 30pt"></div>
    <p class="small_text">
        Guten Tag <?= $data->salesContact()?>,
    </p>
    <p class="small_text" style="padding-bottom: 15px">
        hiermit übersende ich Ihnen folgende Dokumente im Original, Personalausweises bzw. Reisepass als Kopie:
    </p>
    <ul class="small_text">
        <li><input type="checkbox" name="lastpage.die_auto"><span class="cell">Die auto.de Checkliste</span></li>
        <li><input type="checkbox" name="lastpage.den_kaufvertrag_inkl"><span class="cell">Den Kaufvertrag inkl. Verkäufer AGB</span></li>
        <li><input type="checkbox" name="lastpage.ihren_Finanzierungsantrag"><span class="cell">Ihren Finanzierungsantrag</li>
        <li><input type="checkbox" name="lastpage.die_devollmächtigung_zur"><span class="cell">Die Bevollmächtigung zur Zulassung/Vermittlung/Bestellung</span></li>
        <li><input type="checkbox" name="lastpage.den_auftrag_fur"><span class="cell">Den Auftrag für Ihre gewählten zusätzlichen Services</span></li>
        <li><input type="checkbox" name="lastpage.eine_farbkopie_ihres"><span class="cell">Eine  Farbkopie  Ihres  Personalausweises  (lesbar:  Vorder-  und  Rückseite  /  komplett  abgebildet  mit  allen Rändern) oder die Farbkopie Ihres Reisepasses (inkl. Meldebescheinigung: nicht älter als 3 Monate)</span></li>
        <li><input type="checkbox" name="lastpage.einkommensnachweise_der_letzten"><span class="cell">Einkommensnachweise der letzten 3 Monate</span></li>
        <li><br></li>
        <li><br></li>
        <li><input type="checkbox" name="lastpage.response_method"><span class="cell">Meine oben genannten Dokumente habe ich Ihnen bereits vorab per
            <ul>
                <li><input type="checkbox" name="lastpage.fax"><span class="cell">Fax</span></li>
                <li><input type="checkbox" name="lastpage.email"><span class="cell">E-Mail </span></li>
            </ul>
                gesendet.</span>
        </li>
    </ul>
    <br>
    <br>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="col3">
                <p>
                    <span>Ort, Datum</span>
                </p>
            </td>
            <td class="col12">
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="col1">
                <p>
                    <span>Unterschrift Vertragsnehmer | Rückantwort</span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <span class="ort_datum">
                       <input type="text" name="ort_datum">
                    </span>
                </p>
            </td>
            <td>
                <p>
                    <span>&nbsp;</span>
                </p>
            </td>
            <td class="middle">
                <p>
                    <span class="grey_box">
                        &#10005;
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
    </body>
</html>