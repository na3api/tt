<!DOCTYPE html>
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="generator" content="Aspose_Words for _NET 17_1_0_0">
    <title></title>
</head>
<body>

<div class="page_body">
    <table style="width: 100%">
        <tr>
            <td><p><br></p></td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 4px; padding-left: 4px;  padding-bottom: 10px; ">
                <span style="font-size: 5pt;color: #ffffff;">•</span><br>
                <p class="big_text bold">Vertragsnehmer</p>
                <span style="font-size: 5pt;color: #ffffff;">•</span><br>
                <p class="big_text"><?= $data->rSalutation() ?> <?= $data->rFirstName() ?> <?= $data->rLastName() ?></p>
                <span style="font-size: 5pt;color: #ffffff;">•</span><br>
                <p class="big_text"><?= $data->rStreet() ?> <?= $data->rNumber() ?></p>
                <span style="font-size: 5pt;color: #ffffff;">•</span><br>
                <p class="big_text bold"><?= $data->rZip() ?> <?= $data->rCity() ?></p>
            </td>

            <td class="col4" rowspan="2">
                <span>
                     <img src="<?= image_path('offer/belcs-tm7us.003.png') ?>" height="120" style="margin-top: 15px"
                          alt="">
                </span>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 10px">
                <p>
                    <span class="h2">Ihr persönliches Angebot für Ihren <?=$data->cMake()?> <?=$data->cModel()?> <?=$data->cSubModel()?></span>
                </p>
            </td>
        </tr>
    </table>
    <div class="justify">
        <p>
            <span>Sehr geehrte/r <?= $data->rSalutation() ?> <?= $data->rFirstName() ?> <?= $data->rLastName() ?>
                ,</span>
        </p>
        <p>
            <span>wir bedanken uns für Ihr Interesse. Gern übersenden wir Ihnen den Antrag auf Abschluss eines Kaufvertrages/ Finanzierungsvertrages für Ihr Wunschauto <?= $data->cMake() ?> <?= $data->cModel() ?> <?= $data->cSubModel() ?>
                .</span>
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
            <span>Sie haben noch Fragen, unser auto.de Service-Team steht Ihnen selbstverständlich rund um die Uhr zur Verfügung.</span>
        </p>
    </div>
    <table class="wide">
        <tr>
            <td style="width: 360pt;">
                <p>Vielen Dank für Ihr Vertrauen.</p><br>
                <p>Mit freundlichen Grüßen</p>
                <br>
                <br>
                <p><?= $data->salesContact() ?></p>
                <br>
                <br>
            </td>
            <td align="right" style="padding-right: 10px">
                <img style="width: 55pt" src="<?= image_path('offer/DT Beste Autobörsen.jpg') ?>" alt="">
            </td>
            <td align="right">
                <img style="width: 55pt" src="<?= image_path('offer/DT Vertrauen.jpg') ?>" alt="">
            </td>
        </tr>
    </table>
</div>
<pagebreak></pagebreak>
<div class="page_body padding-top">
    <span style="font-size: 1pt;color: #ffffff;">.</span><br>
    <span style="font-size: 14pt;" class="bold">auto.de-Checkliste</span><br>
    <span style="font-size: 1pt;color: #ffffff;">.</span><br>
    <span>So machen Sie Ihr Auto startklar:</span><br>
    <span style="font-size: 5pt;color: #ffffff;">.</span><br>
    <table cellspacing="0" cellpadding="0" class="justify_table">
        <tbody>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step1_grey.svg') ?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <p>
                    <span class="bold">1. Schritt: Durchlesen aller Informationen</span><br>
                    <span>Beginnen Sie mit dem Durchlesen der beigefügten Informationen zu Ihrem neuen Wunschauto, den Kaufvertrag, AGB zum Kaufvertrag sowie die Unterlagen für Ihren Finanzierungsantrag und weitere Dienstleistungen.</span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
            </td>
        </tr>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step2_grey.svg') ?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <span class="bold">2. Schritt: Dokumente ausfüllen und unterschreiben</span><br>
                <span>Bitte vervollständigen Sie die nachfolgenden Dokumente und unterschreiben Sie auf den Seiten 3 und 4 wie in Ihrem Personalausweis/ Reisepass an den mit einem X gekennzeichneten Stellen.</span><br>
                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                <table class="list">
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <form>
                            <label for="checkliste">
                                <input class="checkbox" style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0" name="checkliste">
                            </label>
                            </form>

                        </td>
                        <td style="padding-top: 2px"><span>Die auto.de Checkliste</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <label for="unterschriftenblatter">
                                <input class="checkbox"  style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"  name="unterschriftenblatter" >
                            </label>
                        </td>
                        <td style="padding-top: 2px"><span>Die Unterschriftenblätter</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <label for="kaufvertrag">
                                <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox"  value="0"  name="kaufvertrag">
                            </label>
                        </td>
                        <td style="padding-top: 2px"><span>Den Kaufvertrag inkl. Verkäufer AGB</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <label for="finanzierungsantrag">
                                <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0" name="finanzierungsantrag">
                            </label>
                        </td>
                        <td style="padding-top: 2px"><span>Ihren Finanzierungsantrag</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <label for="sepaLastschriftmandat">
                                <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0" name="sepaLastschriftmandat">
                            </label>
                        </td>
                        <td style="padding-top: 2px"><span>Das SEPA-Lastschriftmandat zur Finanzierung</span></td>
                    </tr>
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <label for="zusatzlichenServices">
                                <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0" name="zusatzlichenServices">
                            </label>
                        </td>
                        <td style="padding-top: 2px"><span>Den Auftrag für Ihre gewählten zusätzlichen Services</span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
            </td>
        </tr>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step3_grey.svg') ?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <span class="bold">3. Schritt: notwendige Unterlagen zusammenstellen</span><br>
                <span>Bitte stellen Sie die folgenden notwendigen Unterlagen zusammen:</span><br>
                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                <table class="list">
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <label for="vervollstandigten">
                                <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                       name="vervollstandigten">
                            </label>
                        </td>
                        <td style="padding-top: 2px"><span> Die vervollständigten Dokumente inkl. aller Anlagen aus dem 2. Schritt und die von Ihnen unterzeichneten Unterschriftenblätter</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <label for="farbkopie">
                                <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                       name="farbkopie">
                            </label>
                        </td>
                        <td style="padding-top: 2px"><span>Eine Farbkopie Ihres Personalausweises <span class="bold">(lesbar: Vorder- und Rückseite / komplett abgebildet mit allen Rändern)</span> oder die Farbkopie Ihres Reisepasses (inkl. Meldebescheinigung: nicht älter als 3 Monate).</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;" valign="top">
                            <label for="einkommensnachweise">
                                <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                       name="einkommensnachweise">
                            </label>
                        </td>
                        <td style="padding-top: 2px"><span>Einkommensnachweise der letzten 3 Monate.</span></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
            </td>
        </tr>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step4_grey.svg') ?>" width="50" height="50" alt="">
            </td>
            <td class="second_col">
                <span class="bold">4. Schritt: Dokumente an auto.de versenden</span><br>
                <span>Damit Sie schnellstmöglich starten können, übersenden Sie bitte sämtliche im Schritt 3 erfassten Dokumente und Unterlagen zur Express-Bearbeitung per E-Mail oder Fax an Ihren persönlichen auto.de Berater. Bitte nutzen Sie dafür das Schreiben „Ihre Rückantwort an auto.de“, welches Ihnen am Ende des Antrages beiliegt.</span><br>
                <span>Bitte berücksichtigen Sie allerdings, dass sämtliche im Schritt 3 erfassten Dokumente und Unterlagen zur Wirksamkeit der Vereinbarungen im Original vorliegen müssen und deswegen ein postalischer Versandt an: auto.de, <?= $data->salesContact() ?>
                    , Thomaskirchhof 20, 04109 Leipzig erforderlich ist.</span>
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
            </td>
        </tr>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step5_grey.svg') ?>" width="50" height="50" alt="">
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
            <td>
                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
            </td>
        </tr>
        <tr>
            <td class="first_col">
                <img src="<?= image_path('offer/step6_grey.svg') ?>" width="50" height="50" alt="">
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


</div>
<pagebreak></pagebreak>
<div class="page_body padding-top">
    <span style="font-size: 14pt;" class="bold">Unterschriftenblatt 1</span><br>
    <span style="font-size: 3pt;color: #ffffff;">.</span><br>
    <span style="font-size: 3pt;color: #ffffff;">.</span><br>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td colspan="4" style="padding-bottom: 5px">
                    <h3><span class="bold">Auto.de-Checkliste</span></h3>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="padding-bottom: 10px">
                    <p>
                        <span>Ich/Wir bestätige/n, dass alle Bestandteile dieser auto.de-Checkliste sowie der Ablauf der auto.de Checkliste selbst zur Kenntnis genommen und akzeptiert wurden. </span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 140pt;">
                    <span>Ort, Datum</span><br>
                    <span style="font-size: 4pt;color: #ffffff;">.</span>
                </td>
                <td style="width: 10pt"></td>
                <td style="width: 400pt;">
                    <span>Unterschrift Vertragsnehmer | Antragsteller</span><br>
                    <span style="font-size: 4pt;color: #ffffff;">.</span>
                </td>
            </tr>
            <tr>
                <td class="ort" align="middle">
                    <label for="ort_datum_antragsteller">
                        <input class="ort_input" type="text" name="ort_datum_antragsteller">
                    </label>
                </td>
                <td style="width: 10pt"></td>
                <td align="middle" class="ort_grey">
                    <span class="grey_box">
                        &#10005;
                    </span>
                </td>
            </tr>
            </tbody>
        </table>
        <table cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td colspan="4" style="padding-bottom: 5px;padding-top: 20px">
                    <h3><span class="bold">Kaufvertrag und allgemeine Geschäftsbedingungen (AGB) des Verkäufers</span></h3>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="padding-bottom: 10px">
                    <p>
                        <span>Dem Kaufvertrag zu Grunde liegen die AGB des Verkäufers, die diesem Vertrag extra Dokument beigefügt sind. Der Käufer stimmt den zugrunde liegenden Daten im Kaufvertrag auf den Seiten 5 und 6 zu. </span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 140pt;">
                    <span>Ort, Datum</span><br>
                    <span style="font-size: 4pt;color: #ffffff;">.</span>
                </td>
                <td style="width: 10pt"></td>
                <td style="width: 400pt;">
                    <span>Unterschrift Vertragsnehmer | Kfz - Kaufvertrag</span><br>
                    <span style="font-size: 4pt;color: #ffffff;">.</span>
                </td>
            </tr>
            <tr>
                <td class="ort" align="middle">
                    <label for="kfz_kaufvertrag">
                        <input class="ort_input" type="text" name="kfz_kaufvertrag">
                    </label>
                </td>
                <td style="width: 10pt"></td>
                <td align="middle" class="ort_grey">
                    <span class="grey_box">
                        &#10005;
                    </span>
                </td>
            </tr>
            </tbody>
        </table>
        <table cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td colspan="4" style="padding-bottom: 15px;padding-top: 20px">
                    <h3><span class="bold">Bevollmächtigung & Vermittlungsauftrag</span></h3>
                    <h5><span class="bold">Verbindlicher Vermittlungsauftrag zum Erwerb eines Autos / Bestellvollmacht</span></h5>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="padding-bottom: 10px">
                    <p>
                        <span>Hiermit bevollmächtigt und beauftragt der Vertragsnehmer auto.de | VICUS Media GmbH, Thomaskirchhof 20, 04109 Leipzig, das
                            o.g.  Fahrzeuges im Rahmen des Vermittlungsvertrages zwischen auto.de und seinem Partnerhändler zu bestellen sowie jede Erklärung abzugeben,
                            die für die Durchführung des Vermittlungsvertrages notwendig ist. Gleiches
                            gilt für die Durchführung sämtlicher Dienstleistungen die im Rahmen des Vertragsverhältnisses zwischen dem
                            Vertragsnehmer und auto.de sowie gegen über den weiteren Partnern von auto.de notwendig ist.
                            Auch hierfür erteilt der Vertragspartner auto.de die entsprechende Vollmacht / Beauftragung.</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 140pt;">
                    <span>Ort, Datum</span><br>
                    <span style="font-size: 4pt;color: #ffffff;">.</span>
                </td>
                <td style="width: 10pt"></td>
                <td style="width: 400pt;">
                    <span>Unterschrift Vertragsnehmer | Bevollmächtigung & Vermittlungsauftrag</span><br>
                    <span style="font-size: 4pt;color: #ffffff;">.</span>
                </td>
            </tr>
            <tr>
                <td class="ort" align="middle">
                    <label for="bevollmachtigung_vermittlungsauftrag">
                        <input class="ort_input" type="text" name="bevollmachtigung_vermittlungsauftrag">
                    </label>
                </td>
                <td style="width: 10pt"></td>
                <td align="middle" class="ort_grey">
                    <span class="grey_box">
                        &#10005;
                    </span>
                </td>
            </tr>
            </tbody>
        </table>
        <table style="margin-top: 250px">
            <tbody>
            <tr>
                <td colspan="4">
                    <p style="font-size: 7pt">
                        <span>Hinweis zur Haftung:</span>
                    </p>
                    <p style="font-size: 7pt">
                        <span>
                           auto.de haftet nicht für die Unrichtigkeit  bzw. irrtümliche Rechtsanwendung und leistet keinen Ersatz für unerfüllte
                            Ansprüche, die aus dem Kfz-Kaufvertrag  abgeleitet werden können. Haftungsansprüche, die sich auf Schäden materieller oder
                            ideeller Art beziehen, durch Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch Nutzung fehlerhafter oder
                            unvollständiger Angaben verursacht, sind grundsätzlich ausgeschlossen, solange kein nachweislich vorsätzliches oder grob fahrlässiges
                            Verschulden von auto.de vorliegt.
                        </span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<pagebreak></pagebreak>
<div class="page_body padding-top">
    <span style="font-size: 14pt;" class="bold">Unterschriftenblatt 2</span><br>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td colspan="4" style="padding-bottom: 15px;padding-top: 20px">
                <h3><span class="bold">Ihr Finanzierungsantrag</span></h3>
                <h5><span class="bold">Verbindlicher Vermittlungsauftrag zum Erwerb eines Autos / Bestellvollmacht</span></h5>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="padding-bottom: 10px">
                <p>
                        <span>Der Antragsteller beantragt unter Einbeziehung der Datenschutzbestimmungen sowie ggf.
                            der Allgemeinen Geschäfts-bedingungen des finanzierenden Kreditinstituts bzw. des Kreditvermittlers
                            den Abschluss eines Finanzierungsvertrags für das o.g. Fahrzeug.</span>
                </p>
                <p>
                        <span>Sofern nicht als Servicekomponente im Finanzierungsvertrag enthalten, werden Ihre zusätzlichen Services
                            und Logistikleistungen gesondert berechnet.Die  Servicekomponenten
                            können Sie dem Anhang „Ihre gewählten zusätzlichen Services“ entnehmen.</span>
                </p>
                <p>
                    <span>Alle mit einzureichenden Vertragsunterlagen sind in der „auto.de Checkliste“ definiert und für die Vertragsumsetzung erforderlich.</span>
                </p>
                <p>
                    <span>Hiermit bestätige ich, dass ich spätestens mit Erhalt des Kreditvertragsangebots durch das finanzierende Kreditinstitut bzw.</span>
                </p>
                <p>
                    <span>Den Kreditvermittler die Antragsunterlagen, samt notwendiger Unterlagen, im Original an diesen Partner bzw. auto.de sende.</span>
                </p>
                <br>
                <p>
                    <span>Die Datenschutzhinweise des finanzierenden Kreditinstituts bzw. des Kreditvermittlers sowie die
                        Datenschutzinformation für den Bonitätsprüfungsprozess inklusive der Datenübermittlung und Datenerfassung sowie
                        den Hinweis auf Datenübermittlung an die SCHUFA habe ich im Rahmen der auto.de Datenschutzbestimmungen erhalten und zur Kenntnis genommen.</span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <table width="100%">
        <tbody>
        <tr>
            <td style="padding-bottom: 10px;padding-top: 5px">
                <h5><span class="bold">Restschuldversicherung</span></h5>
            </td>
        </tr>
        </tbody>
    </table>
    <table width="100%">
        <tbody>
        <tr>
            <td style="padding-left:10px;padding-right:10px;" valign="top">
                <label for="payment_protection_insurance">
                    <input style="background-color: #ffffff;font-size: 12pt; width: 50pt" type="checkbox" value="0"
                           name="payment_protection_insurance">
                </label>
            </td>
            <td width="100%" style="padding-top: 2px">
                <p>
                    <span>Ja, ich möchte zu meiner eigenen Absicherung eine Restschuldversicherung abschließen. Bitte unterbreiten Sie mir hierfür ein Angebot.</span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <br>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td style="width: 140pt;">
                <span>Ort, Datum</span><br>
                <span style="font-size: 4pt;color: #ffffff;">.</span>
            </td>
            <td style="width: 10pt"></td>
            <td style="width: 400pt;">
                <span>Unterschrift Vertragsnehmer / Finanzierungsantrag</span><br>
                <span style="font-size: 4pt;color: #ffffff;">.</span>
            </td>
        </tr>
        <tr>
            <td class="ort" align="middle">
                <label for="vertragsnehmer_finanzierungsantrag">
                    <input type="text" class="ort_input" name="vertragsnehmer_finanzierungsantrag">
                </label>
            </td>
            <td style="width: 10pt"></td>
            <td align="middle" class="ort_grey">
                    <span class="grey_box">
                        &#10005;
                    </span>
            </td>
        </tr>
        </tbody>
    </table>
    <br>
    <table cellspacing="0" cellpadding="0" class="wide additional_services">
        <tbody>
        <tr>
            <td colspan="2">
                <h3><span class="bold">Ihre zusätzlichen Services</span></h3>
            </td>
            <td align="right">
                <span style="font-size: 6pt">(alle Angaben inkl. 19 % MwSt.)</span>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <span class="bold">Auslieferung</span><span style="font-size: 6pt"> (bitte ankreuzen)</span>
            </td>
        </tr>
        <tr>
            <td align="top" style="width:30px">
                <label for="additional_services_Abholung">
                    <input style="background-color: #ffffff;font-size: 12pt; width: 50pt" type="checkbox" value="0" name="additional_services_Abholung">
                </label>
            </td>
            <td style="padding-right:10px;" valign="top">
                <span class="bold">Abholung |</span>
                <span> beim auto.de-Partnerhändler im PLZ-Gebiet <?= substr($data->uZip(), 0, 2) ?>xxx </span>
                <span style="font-size: 6pt;">(Montag bis Freitag).</span>
            </td>
            <td class="right">
                <span>0,00 €</span>
            </td>
        </tr>
        <tr>
            <td align="top">
                <label for="additional_services_Anlieferung">
                    <input style="background-color: #ffffff;font-size: 12pt; width: 50pt" type="checkbox" value="0" name="additional_services_Anlieferung">
                </label>
            </td>
            <td style="padding-right:10px;" valign="top">
                <span class="bold">Anlieferung | auto.de liefert Ihnen Ihr Auto direkt und bequem nach Hause</span>
            </td>
            <td class="right">
                <span>499,00 €</span>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 10px;padding-top: 10px">
                <span class="bold">Zulassung </span><span style="font-size: 6pt">(bitte ankreuzen)</span>
            </td>
        </tr>
        <tr>
            <td align="top">
                <label for="additional_services_Standard">
                    <input style="background-color: #ffffff;font-size: 12pt; width: 50pt" type="checkbox" value="0" name="additional_services_Standard">
                </label>
            </td>
            <td style="padding-right:10px;" valign="top">
                <span class="bold small">Standard |</span>
                <span class="small"> auto.de kümmert sich um die Zulassung Ihres Autos (Dauer ca. 7 Tage)</span>
            </td>
            <td class="right">
                <span>149,00 €</span>
            </td>
        </tr>
        <tr>
            <td align="top">
                <label for="additional_services_Express">
                    <input style="background-color: #ffffff;font-size: 12pt; width: 50pt" type="checkbox" value="0" name="additional_services_Express">
                </label>
            </td>
            <td style="padding-right:10px;" valign="top">
                <span class="bold small">Express |</span>
                <span class="small"> auto.de kümmert sich im Expresstempo um die Zulassung Ihres Autos (Dauer ca. 2 Tage)</span>
            </td>
            <td class="right">
                <span>249,00 €</span>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 10px;padding-top: 10px">
                <span class="bold small">Finanzierung </span><span style="font-size: 6pt">(bitte ankreuzen)</span>
            </td>
        </tr>
        <tr>
            <td align="top">
                <label for="additional_services_Finanzierung">
                    <input style="background-color: #ffffff;font-size: 12pt; width: 50pt" type="checkbox" value="0"
                           name="additional_services_Finanzierung">
                </label>
            </td>
            <td colspan="2" style="padding-right:10px;" valign="top">
                <span class="bold small">Bitte unterbreiten Sie mir eine Option, die zusätzlichen Services über der Laufzeit mit zu finanzieren.</span>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 10px;padding-top: 10px">
                <span class="bold ">Versicherung </span><span class="context">(bitte ankreuzen und ausfüllen)</span>
            </td>
        </tr>
        <tr>
            <td align="top">
                <label for="additional_services_Versicherung">
                    <input style="background-color: #ffffff;font-size: 12pt; width: 50pt" type="checkbox" value="0"
                           name="additional_services_Versicherung">
                </label>
            </td>
            <td style="padding-right:10px;" valign="top" colspan="2">
                <span class="bold small">Bitte unterbreiten Sie mir ein Angebot für die Versicherung des Fahrzeugs.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <table>
        <tbody>
        <tr>
            <td>
                <p>
                    <span>Meine Schadensfreiheitsklassen:</span>
                </p>
            </td>
            <td>
                <p>
                    <span> &nbsp;&nbsp;&nbsp;Haftpflichtversicherung &nbsp;&nbsp;&nbsp;SF</span>
                </p>
            </td>
            <td>
                <label for="liability_insurance">
                    <input style="outline: none; padding: 30px; background-color: #D9D9D9;border-color: #D9D9D9;"
                           type="text" name="liability_insurance">
                </label>
            </td>
            <td>
                <p>
                    <span> &nbsp;&nbsp;&nbsp;Vollkaskoversicherung &nbsp;&nbsp;&nbsp;SF</span>
                </p>
            </td>
            <td>
                <label for="comprehensive_insurance">
                    <input style="outline: none; padding: 30px; background-color: #D9D9D9;border-color:#D9D9D9;"
                           type="text" name="comprehensive_insurance">
                </label>
            </td>
        </tr>
        </tbody>
    </table>
    <br>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td style="width: 140pt;">
                <span>Ort, Datum</span><br>
                <span style="font-size: 4pt;color: #ffffff;">.</span>
            </td>
            <td style="width: 10pt"></td>
            <td style="width: 400pt;">
                <span>Unterschrift Vertragsnehmer / zusätzliche Services</span><br>
                <span style="font-size: 4pt;color: #ffffff;">.</span>
            </td>
        </tr>
        <tr>
            <td class="ort" align="middle">
                <label for="ort_datum_zusatzliche_services">
                    <input type="text" class="ort_input" name="ort_datum_zusatzliche_services">
                </label>
            </td>
            <td style="width: 10pt"></td>
            <td align="middle" class="ort_grey">
                    <span class="grey_box">
                        &#10005;
                    </span>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<pagebreak></pagebreak>
<div class="page_body padding-small-top">
    <span style="font-size: 14pt;" class="bold">Kfz-Kaufvertrag</span><br>
    <span style="font-size: 3pt;color: #ffffff;">.</span><br>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 48%">
                    <p>
                        <span class="pretitle">Käufer</span>
                    </p>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <label for="buyer_name">
                                    <span>Vorname Name, Firma</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input style="width: 50%"
                                           class="fields_color"
                                           type="text"
                                           name="buyer_name" value="<?=  $data->rSalutation() . ' ' . $data->rFirstName() . ' ' . $data->rLastName() . ($data->rCompany() ? (', ' . $data->rCompany(true)) : '') ?>">
                                </label>
                                <br>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="buyer_street">
                                    <span>Straße</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 38%"
                                           type="text"
                                           name="buyer_street" value="<?= $data->rStreet()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="buyer_addres_nr">
                                    <span>Nr.</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 10%"
                                           type="text"
                                           name="buyer_addres_nr" value="<?= $data->rNumber()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="buyer_plz">
                                    <span>PLZ</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 10%"
                                           type="text"
                                           name="buyer_plz" value="<?= $data->rZip()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="buyer_place">
                                    <span>Ort</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 38%"
                                           type="text"
                                           name="buyer_place" value="<?= $data->rCity()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="buyer_telefon">
                                    <span>Telefon</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="buyer_phone" value="<?= $data->rPhoneMain()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="buyer_email">
                                    <span>E-Mail</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="buyer_email" value="<?= $data->rEmail()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="buyer_passport_nr">
                                    <span>Personalausweis- / Reisepass-ID</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 30%"
                                           type="text"
                                           name="buyer_passport_nr" value="">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="buyer_passport_privaider">
                                    <span>Ausstellungsbehörde</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 18%"
                                           type="text"
                                           name="buyer_passport_privaider" value="">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td style="width: 15pt">
                    <p>
                        <span style="font-size: 3pt;color: #ffffff;">.</span>
                    </p>
                </td>
                <td style="width: 48%">
                    <p>
                        <span class="pretitle">Verkäufer (Unternehmer)</span>
                    </p>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <label for="seller_names">
                                    <span>Vorname Name, Firma</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="seller_names" value="<?=  $data->uSalutation() . ' ' . $data->uFirstName() . ' ' . $data->uLastName() . ($data->uCompany() ? (', ' . $data->uCompany(true)) : '')?>">
                                </label>
                                <br>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="seller_street">
                                    <span>Straße</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 38%"
                                           type="text"
                                           name="seller_street" value="<?= $data->uStreet()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="seller_addres_nr">
                                    <span>Nr.</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 10%"
                                           type="text"
                                           name="seller_addres_nr" value="<?= $data->uNumber()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="seller_plz">
                                    <span>PLZ</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 10%"
                                           type="text"
                                           name="seller_plz" value="<?= $data->uZip()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="seller_place">
                                    <span>Ort</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 38%"
                                           type="text"
                                           name="seller_place" value="<?= $data->uCity()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="seller_telefon">
                                    <span>Telefon</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="seller_telefon" value="<?= '+49 800 40 30 182'?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="seller_email">
                                    <span>E-Mail</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="seller_email" value="<?= 'autohandel@auto.de'?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="seller_commercial_register">
                                    <span>Handelsregister</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 30%"
                                           type="text"
                                           name="seller_commercial_register" value="<?= $data->uCommercialRegister()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="seller_commercial_register_nr">
                                    <span>Handelsregister Nr.</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 18%"
                                           type="text"
                                           name="seller_commercial_register_nr" value="<?= $data->uCommercialRegisterNumber()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <span style="font-size: 1pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 48%">
                    <p>
                        <span class="pretitle">1. Fahrzeug</span>
                    </p>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <label for="vehicle_marke">
                                    <span>Marke</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="vehicle_marke" value="<?= $data->cMake()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="vehicle_model">
                                    <span>Model</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="vehicle_model" value="<?= $data->cModel()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="vehicle_fin">
                                    <span>FIN (Fahrzeugidentifikationsnummer)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="vehicle_fin" value="<?= $data->cVin()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <label for="vehicle_reg_number">
                                    <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                    <span>Fahrzeugbriefnummer / Zulassungsbescheinigung Teil II</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="vehicle_reg_number" value="<?= ''?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td style="width: 15pt">
                    <p>
                        <span style="font-size: 3pt;color: #ffffff;">.</span>
                    </p>
                </td>
                <td style="width: 48%">
                    <p>
                        <span class="pretitle" style="color: #ffffff;">1. Fahrzeug</span>
                    </p>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <label for="vehicle_condition">
                                    <span>Fahrzeugart</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="vehicle_condition" value="<?= $data->cCondition()?>">
                                </label>
                            </td>
                            <td>
                                <label for="amtliches_kennzeichen">
                                    <span>Amtliches Kennzeichen</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="amtliches_kennzeichen">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="fahrzeug_ps">
                                    <span>PS</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 14%"
                                           type="text"
                                           name="fahrzeug_ps" value="<?= $data->cPowerPS()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="fahrzeug_ez">
                                    <span>Erstzulassung (EZ)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 18%"
                                           type="text"
                                           name="fahrzeug_ez" value="<?= $data->cFirstRegistration()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="fahrzeug_hubraum">
                                    <span>Hubraum</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 14%"
                                           type="text" value="ccm"
                                           name="fahrzeug_hubraum" value="<?= $data->cCubicCapacity()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="fahrzeug_hauptuntersuchung">
                                    <span>Nächste Hauptuntersuchung</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 28%"
                                           type="text"
                                           name="fahrzeug_hauptuntersuchung" value="<?= $data->cGeneralInspection() ?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="fahrzeug_CO2">
                                    <span>CO2-Effizienzklasse</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 20%"
                                           type="text"
                                           name="fahrzeug_CO2" value="<?= $data->cEnergyEfficiencyClass() ?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="fahrzeug_netto">
                                    <span>(Netto-) Kaufpreis €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 15%"
                                           type="text"
                                           name="fahrzeug_netto" value="<?= $data->getFinance('net')?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="fahrzeug_umSt">
                                    <span>+19% UmSt. €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 16%"
                                           type="text"
                                           name="fahrzeug_umSt" value="<?= $data->getFinance('difference')?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="fahrzeug_brutto">
                                    <span>(Brutto-) Kaufpreis €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 15%"
                                           type="text" value="ccm"
                                           name="fahrzeug_brutto" value="<?= $data->getFinance('currentSalesPrice')?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <span style="font-size: 1pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td>
                    <p>
                        <span style="font-size: 10pt;"><span class="bold">2. Gewährleistung </span>(bitte ankreuzen)</span>
                    </p>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <p>
                        <span>Bei dem Kauf handelt es sich im Hinblick auf der Gewährleistung um einen:</span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <table width="100%">
            <tbody>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="b2c_end_customer">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" checked="checked" value="0"
                               name="b2c_end_customer">
                    </label>

                </td>
                <td width="100%" style="padding-top: 2px">
                    <span>
                        <span class="bold">B2C – Verkauf an Endkunden |</span>
                        Es gelten die gesetzlichen Regelungen für die Sachmängelhaftung beim Verkauf von Fahrzeugen an Endkunden.
                    </span>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="b2c_car_dealer">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="b2c_car_dealer">
                    </label>
                </td>
                <td width="100%" style="padding-top: 2px">
                     <span>
                        <span class="bold">B2B – Verkauf an gewerblichen Autohändler |</span>
                        Die Sachmängelhaftung wird ausgeschlossen, da Verkäufer und Käufer unternehmerisch tätig sind und das Fahrzeug rein gewerblich genutzt wird.
                    </span>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<pagebreak></pagebreak>
<div class="page_body padding-small-top">
    <span style="font-size: 1pt;color: #ffffff;">.</span><br>
    <span style="font-size: 10pt;"><span class="bold">3. Zusicherung des Verkäufers</span> (bitte ankreuzen)</span><br>
    <span style="font-size: 3pt;color: #ffffff;">.</span><br>
    <p>
        <span>Der </span>
        <span><span class="bold">Verkäufer</span></span>
        <span> sichert folgende Eigenschaften zu (nicht Zutreffendes bitte streichen):</span>
    </p>
    <form>
        <table width="100%">
            <tbody>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="assuranceincluding">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" checked="checked" value="0"
                               name="assuranceincluding">
                    </label>
                </td>
                <td width="100%" style="padding-top: 2px">
                    <span>Das Fahrzeug einschließlich des mitverkauften Zubehörs steht in seinem alleinigen Eigentum</span>
                    <br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="middle">
                    <label for="assurance_has_total_mileage">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" checked="checked" value="0"
                               name="assurance_has_total_mileage">
                    </label>
                </td>
                <td width="100%" style="padding-top: 4px">
                    <span>Das Fahrzeug weist eine Gesamtfahrleistung von </span>
                    <label for="assurance_mileage">
                        <input class="fields_color" style="" type="text"
                               name="assurance_mileage" value="<?= number($data->cMileageN())?>"><span> km auf</span>
                    </label>
                    <br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="assurance_has_owned_by_seller">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"  checked="checked"
                               name="assurance_has_owned_by_seller">
                    </label>
                </td>
                <td width="100%" style="padding-top: 2px">
                    <span>Das Fahrzeug hatte, seit es im Eigentum des Verkäufers war, und soweit bekannt auch früher, keinen Unfallschaden</span>
                    <br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="assurance_has_since_property_seller">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="assurance_has_since_property_seller">
                    </label>

                </td>
                <td width="100%" style="padding-top: 2px">
                    <span>Das Fahrzeug hatte, seit es im Eigentum des Verkäufers war, und soweit bekannt auch früher folgende Unfallschäden: </span>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <label for="assurance_since_property_seller">
                        <input style="width: 100%;background-color: #D9D9D9;border-color:#D9D9D9;" type="text"
                               name="assurance_since_property_seller">
                    </label>
                    <br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="assurance_has_not_damages">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" checked="checked" value="0"
                               name="assurance_has_not_damages">
                    </label>
                </td>
                <td width="100%" style="padding-top: 2px">
                    <span>Das Fahrzeug hat keine sonstigen Beschädigungen</span>
                    <br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="assurance_has_damages">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="assurance_has_damages">
                    </label>
                </td>
                <td width="100%" style="padding-top: 2px">
                    <span>Das Fahrzeug hat folgende Beschädigungen: </span>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <label for="assurance_damages">
                        <input style="width: 100%;background-color: #D9D9D9;border-color:#D9D9D9;" type="text"
                               name="assurance_damages">
                    </label>
                    <br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="assurance_has_additional_eq">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" checked="checked" value="0"
                               name="assurance_has_additional_eq">
                    </label>

                </td>
                <td width="100%" style="padding-top: 2px">
                    <span>Das Fahrzeug weist folgende Zusatzausstattung bzw. Zubehör auf (z.B. Radio, Felgen, Navigationsgerät o. Ä.): </span>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <label for="assurance_additional_eq">
                        <input style="width: 100%;background-color: #D9D9D9;border-color:#D9D9D9;" type="text"
                               value="Siehe Ausstattung des Fahrzeuges"
                               name="assurance_additional_eq">
                    </label>
                    <br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="middle">
                    <label for="assurance_has_prev_owner">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" checked="checked" value="0"
                               name="assurance_has_prev_owner">
                    </label>
                </td>
                <td width="100%" style="padding-top: 4px">
                    <span>Das Fahrzeug hatte nach Kenntnis des Verkäufers </span>
                    <label for="assurance_prev_owners">
                        <input class="fields_color" style="" type="text"
                               name="assurance_prev_owners" value="<?= $data->cFirstOwner()?>">
                    </label>
                    <span> Vorbesitzer.</span>
                    <br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="middle">
                    <span style="color: #ffffff;font-size: 12pt;"></span>
                </td>
                <td width="100%" style="padding-top: 4px">
                    <span>Das Fahrzeug wurde gewerblich genutzt, z.B. als Taxi, Miet- oder Fahrschulwagen</span>
                    <span class="vote">
                    <?= $data->cTaxi() ?>
                </span>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="middle">
                    <span style="color: #ffffff;font-size: 12pt;"></span>
                </td>
                <td width="100%" style="padding-top: 4px">
                    <span>Bei dem Fahrzeug handelt es sich um ein Importfahrzeug:</span>
                    <span class="vote">
                    <?= $data->cCountryVersion() ?>
                </span>
                </td>
            </tr>
            </tbody>
        </table>
        <span style="font-size: 1pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td>
                    <p>
                        <span style="font-size: 10pt;"><span class="bold">4. Zahlungsvereinbarung </span>(bitte ankreuzen)</span>
                    </p>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <p>
                        <span>Der Käufer nutzt für die Bezahlung des Fahrzeugs die folgende Form:</span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <table width="100%">
            <tbody>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="assurance_has_cash_purchase">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="assurance_has_cash_purchase">
                    </label>

                </td>
                <td width="100%" style="padding-top: 2px">
                    <span>
                        <span class="bold">Barkauf |</span>
                       Der Käufer zahlt den Bruttokaufpreis zuzüglich der beauftragen Nebenleistungen vollständig per Überweisung. Die
Bankverbindung wird nach Annahme mitgeteilt.
                    </span>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-right:10px;" valign="top">
                    <label for="assurance_has_financing">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" checked="checked" value="0"
                               name="assurance_has_financing">
                    </label>
                </td>
                <td width="100%" style="padding-top: 2px">
                     <span>
                        <span class="bold">Finanzierung |</span>
                       Der Käufer zahlt den Bruttokaufpreis zuzüglich der beauftragen Nebenleistungen gemäß des innerhalb
dieses Dokuments beantragten Finanzierungsantrages.
                    </span>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                </td>
            </tr>
            </tbody>
        </table>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <span style="font-size: 2pt;color: #ffffff;">.</span><br>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td>
                    <p>
                        <span>Das Fahrzeug bleibt bis zur vollständigen Bezahlung des Kaufpreises im Eigentum des Verkäufers.</span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
        <span style="font-size: 1pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <span style="font-size: 3pt;color: #ffffff;">.</span><br>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td>
                    <p>
                        <span style="font-size: 10pt;"><span class="bold">5. Allgemeine Geschäftsbedingungen (AGB) des Verkäufers </span></span>
                    </p>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                    <p>
                        <span>Dem Kaufvertrag zu Grunde liegen die AGB des Verkäufers, die diesem Vertrag als extra Dokument beigefügt sind.</span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <table style="margin-top: 110pt">
        <tbody>
        <tr>
            <td colspan="4">
                <p>
                    <span style="font-size: 7pt;">Hinweis zur Haftung:</span>
                </p>
                <p>
                    <span style="font-size: 7pt;">
                       auto.de haftet nicht für die Unrichtigkeit  bzw. irrtümliche Rechtsanwendung und leistet keinen Ersatz für unerfüllte
                        Ansprüche, die aus dem Kfz-Kaufvertrag  abgeleitet werden können. Haftungsansprüche, die sich auf Schäden materieller oder
                        ideeller Art beziehen, durch Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch Nutzung fehlerhafter oder
                        unvollständiger Angaben verursacht, sind grundsätzlich ausgeschlossen, solange kein nachweislich vorsätzliches oder grob fahrlässiges
                        Verschulden von auto.de vorliegt.
                    </span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<pagebreak></pagebreak>
<div class="page_body" style="padding-top: 10px">
    <span style="font-size: 1pt;color: #ffffff;">.</span><br>
    <span class="blue"
          style="font-size: 14pt;" class="bold"><?= $data->cMake() ?> <?= $data->cModel() ?> <?= $data->cSubModel() ?></span><br>
    <span style="font-size: 3pt;color: #ffffff;">.</span><br>
    <hr style="height: 1pt; color: #005CCB; padding-bottom: 10px;">
    <table cellspacing="0" cellpadding="0" class="car_info wide">
        <tbody>
        <tr>
            <td>
                <img width="260pt" src="<?= $data->mainImage() ?? '' ?>" alt="">
            </td>
            <td width="15pt"></td>
            <td width="280pt">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td colspan="2" style="padding-top: 10px;padding-bottom: 15px;">
                            <p class="h2 blue blue_header normal">BASISDATEN</p>
                            <span style="font-size: 1pt;color: #ffffff;">.</span><br>
                            <span style="font-size: 1pt;color: #ffffff;">.</span><br>
                            <span style="font-size: 1pt;color: #ffffff;">.</span><br>
                        </td>
                    </tr>
                    <?php if ($data->cWasPrice() && $data->cWasPrice(true) != $data->cCurrentSalesPrice(true) && $data->cWasPrice(true) > $data->cCurrentSalesPrice(true)): ?>
                        <tr>
                            <td class="one-tree" style="padding-bottom: 10px">
                                <span style="color: #676767;">Finanzierung</span><br>
                            </td>
                            <td class="price" style="padding-bottom: 10px">
                                <span style="color: #676767;">statt </span>
                                <span class="through"><?= $data->oldMonthlyInstallment() ?> €</span><br>
                                <span class="red"><?= $data->monthlyInstallment() ?> €</span><span
                                        style="color: #676767;">/Monat</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-bottom: 10px">
                                <span style="color: #676767;">Preis</span><br>
                            </td>
                            <td class="price" style="padding-bottom: 10px">
                                <span style="color: #676767;">statt</span>
                                <span class="through"><?= money($data->cWasPrice()) ?>€</span><br>
                                <span class="red"><?= $data->cCurrentSalesPrice() ?> €</span><br>
                            </td>
                        </tr>
                    <?php else: ?>
                        <tr>
                            <td class="one-tree" style="padding-bottom: 10px">
                                <span style="color: #676767;">Finanzierung</span><br>
                            </td>
                            <td class="price" style="padding-bottom: 10px">
                                <span style="color: #676767;">ab monatl. </span>
                                <span class="red"><?= $data->monthlyInstallment() ?> €</span>
                                <span style="color: #676767;">/Monat</span><br>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-bottom: 10px">
                                <span style="color: #676767;">Preis</span><br>
                            </td style="padding-bottom: 10px">
                            <td class="price">
                                <span class="red"><?= $data->cCurrentSalesPrice() ?> €</span><br>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td style="padding-bottom: 10px">
                            <span style="color: #676767;">Marke</span>
                        </td>
                        <td style="padding-bottom: 10px">
                            <span class="darlgreybold"><?= $data->cMake() ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 10px">
                            <span style="color: #676767;">Modell</span>
                        </td>
                        <td style="padding-bottom: 10px">
                            <span class="darlgreybold"><?= $data->cModel() ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 10px">
                            <span style="color: #676767;"><?= $data->cSubModel() ? 'Submodell' : '' ?></span>
                        </td>
                        <td style="padding-bottom: 10px">
                            <span class="darlgreybold"><?= $data->cSubModel() ?></span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" class="car_info wide">
        <tbody>
        <tr>
            <td style=width="260pt">
                <hr style="height: 1pt; color: #005CCB; padding-bottom: 10px;">
            </td>
            <td style=width="15pt"></td>
            <td style=width="280pt">
                <hr style="height: 1pt; color: #005CCB; padding-bottom: 10px;">
            </td>
        </tr>
        <tr>
            <td width="260pt">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td colspan="2" style="padding-bottom: 10px; padding-top: 20px;"
                            class="<?= count($data->hightlights()) > 16 ? 'no_border' : '' ?>"><p
                                    class="h2 blue blue_header normal">ÜBERBLICK</p></td>
                    </tr>
                    <tr>
                        <td class="one-tree"><span class="greylabel">Kilometerstand</span></td>
                        <td><span class="darlgreybold"><?= $data->cMileage() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Erstzulassung</span></td>
                        <td><span class="darlgreybold"><?= $data->cFirstRegistration() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Fahrzeughalter</span></td>
                        <td><span class="darlgreybold"><?= $data->cNumberOfPreviousOwners() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel"> Türen</span></td>
                        <td><span class="darlgreybold"><?= $data->cDoors() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Verfügbarkeit</span></td>
                        <td><span class="darlgreybold"><?= $data->cAvailabilityMode() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Fahrzeugzustand</span></td>
                        <td><span class="darlgreybold"><?= $data->cCondition() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Leistung</span></td>
                        <td><span class="darlgreybold"><?= $data->cPower() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Antrieb</span></td>
                        <td><span class="darlgreybold"><?= $data->cDrive() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Schaltung</span></td>
                        <td><span class="darlgreybold"><?= $data->cGearbox() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Kraftstoff</span></td>
                        <td><span class="darlgreybold"><?= $data->cFuel() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">CO2-Ausstoß</span></td>
                        <td><span class="darlgreybold"><?= $data->cCo2Comb() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Verbrauch</span></td>
                        <td><span class="darlgreybold"><?= $data->cConsumption() ?></span></td>
                    </tr>
                    <?php if ($data->cEnergyEfficiencyClass()): ?>
                        <tr>
                            <td style="padding-right: 10px">
                                <br>
                                <span style="color: #676767;">CO-2-Effizienz</span>
                                <br>
                                <span style="font-size: 6pt;line-height: 8pt;">
                                    *Auf der Grundlage der gemessenen CO2 Emissionen unter Berücksichtigung der Masse des Fahrzeugs ermittelt
                                </span>
                            </td>
                            <td>
                                <br>
                                <?= $data->CO2EfficiencyWidget() ?>
                            </td>
                        </tr>
                    <?php endif ?>
                </table>
            </td>
            <td width="15pt"></td>
            <td width="280pt">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td style="padding-bottom: 10px;padding-top: 20px;" colspan="2"
                            class="<?= count($data->hightlights()) > 16 ? 'no_border' : '' ?>"><p
                                    class="h2 blue blue_header normal">HIGHLIGHTS</p></td>
                    </tr>
                    <?php foreach ($data->hightlights() as $key => $high): ?>
                        <tr valign="m">
                            <td style="padding-left: 10px;padding-right: 10px;padding-bottom: 10px;text-align: center">
                                <img style="height:20pt;max-width: 20pt;" src="<?= image_path($high['icon']) ?>">
                            </td>
                            <td style="padding-bottom: 10px;vertical-align:middle;">
                                <p class="darlgreybold"><?= $high['trans'] ?? '' ?></p>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<pagebreak></pagebreak>
<div class="page_body padding-small-top">
    <table cellspacing="0" cellpadding="0" class="car_info wide detail">
        <tbody>
        <tr>
            <td width="49%">
                <table cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tbody>
                    <tr>
                        <td colspan="2" class="no_border" style="padding-bottom: 5px;padding-top: 10px">
                            <p class="h2 blue blue_header normal no_border">DATEN MOTOR UND GETRIEBE</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="130pt"><span class="greylabel">Beschleunigung</span></td>
                        <td width="130pt"><span class="darlgreybold"><?= $data->cAcceleration() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Kraftstoffe</span></td>
                        <td><span class="darlgreybold"><?= $data->cFuel() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Zylinder</span></td>
                        <td><span class="darlgreybold"><?= $data->cCylinders() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Hubraum</span></td>
                        <td><span class="darlgreybold"><?= $data->cCubicCapacity() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Leistung</span></td>
                        <td><span class="darlgreybold"><?= $data->cPower() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Drehmoment</span></td>
                        <td><span class="darlgreybold"><?= $data->cTorque() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Höchstgeschwindigkeit</span></td>
                        <td><span class="darlgreybold"><?= $data->cHighSpeed() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Getriebe</span></td>
                        <td><span class="darlgreybold"><?= $data->cGearbox() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Antrieb</span></td>
                        <td><span class="darlgreybold"><?= $data->cDrive() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Tankvolumen</span></td>
                        <td><span class="darlgreybold"><?= $data->cFuelCapacity() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">HSN</span></td>
                        <td><span class="darlgreybold"><?= $data->cHsn() ?></span></td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 10px"><span class="greylabel">TSN</span>
                        </td>
                        <td style="padding-bottom: 10px">
                            <span class="darlgreybold"><?= $data->cTsn() ?></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tbody>
                        <tr>
                            <td colspan="2" class="no_border" style="padding-bottom: 5px;padding-top: 15px">
                                <p class="h2 blue blue_header normal no_border">UMWELT</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="130pt"><span class="greylabel">Verbrauch <br>innerorts</span></td>
                            <td width="130pt"><span class="darlgreybold"><?= $data->consumptionInner() ?></span></td>
                        </tr>
                        <tr>
                            <td><span class="greylabel">Verbrauch <br>außerorts</span></td>
                            <td><span class="darlgreybold"><?= $data->consumptionOuter() ?></span></td>
                        </tr>
                        <tr>
                            <td><span class="greylabel">Verbrauch <br>(komb_)*</span></td>
                            <td><span class="darlgreybold"><?= $data->consumptionCombined() ?></span></td>
                        </tr>
                        <tr>
                            <td><span class="greylabel">CO2-Ausstoß <br> (komb_)*</span></td>
                            <td><span class="darlgreybold"><?= $data->cCo2() ?></span></td>
                        </tr>
                        <tr>
                            <td><span class="greylabel">Emissionsklasse</span></td>
                            <td><span class="darlgreybold"><?= $data->cEmissionClass() ?></span></td>
                        </tr>
                        <tr>
                            <td><span class="greylabel">Feinstaubplakette</span></td>
                            <td><span class="darlgreybold"><?= $data->emissionSticker() ?></span></td>
                        </tr>
                        <?php if ($data->cEnergyEfficiencyClass()): ?>
                            <tr>
                                <td style="padding-right: 10px">
                                    <br>
                                    <span class="greylabel">CO-2-Effizienz</span><br>
                                    <span style="font-size: 6pt;line-height: 8pt;color: #676767;">
                                        *Auf der Grundlage der gemessenen CO2 Emissionen unter Berücksichtigung der Masse des Fahrzeugs ermittelt
                                    </span>
                                </td>
                                <td>
                                    <br>
                                    <?= $data->CO2EfficiencyWidget() ?>
                                </td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </td>
            <td width="2%"></td>
            <td width="49%">
                <table   width="260pt" cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tr>
                        <td colspan="2" class="no_border" style="padding-bottom: 5px;padding-top: 10px">
                            <p class="h2 blue blue_header normal">MAßE UND ABMESSUNGEN</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="105px"><span class="greylabel">Türen</span></td>
                        <td width="155px"><span class="darlgreybold"><?= $data->cDoorsN() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Länge</span></td>
                        <td><span class="darlgreybold"><?= $data->cLength() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Breite</span></td>
                        <td><span class="darlgreybold"><?= $data->cWidth() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Höhe</span></td>
                        <td><span class="darlgreybold"><?= $data->cHeight() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Radstand</span></td>
                        <td><span class="darlgreybold"><?= $data->сWheelBase() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Ladevolumen</span></td>
                        <td><span class="darlgreybold"><?= $data->cCapacityLoad() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Kofferraumvolumen</span></td>
                        <td><span class="darlgreybold"><?= $data->cCargoCapacity() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Sitze</span></td>
                        <td><span class="darlgreybold"><?= $data->cSeats() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Leergewicht</span></td>
                        <td><span class="darlgreybold"><?= $data->cTare() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Zulässiges Gesamtgewicht</span></td>
                        <td><span class="darlgreybold"><?= $data->cCargoCapacity() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Anhängelast (gebremst)</span></td>
                        <td><span class="darlgreybold"><?= $data->cTrailerWeightBraked() ?></span></td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 10px"><span class="greylabel">Anhängelast (ungebremst)</span></td>
                        <td style="padding-bottom: 10px"><span
                                    class="darlgreybold"><?= $data->cTrailerWeightUnbraked() ?></span></td>
                    </tr>
                </table>
                <table width="260pt"  cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tr>
                        <td colspan="2" class="no_border" style="padding-bottom: 5px;padding-top: 15px">
                            <p class="h2 blue blue_header normal no_border">ZUSTAND UND VERFÜGBARKEIT</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="110px"><span class="greylabel">Verfügbarkeit</span></td>
                        <td width="150px"><span class="darlgreybold"><?= $data->cAvailabilityMode() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Hauptuntersuchung</span></td>
                        <td><span class="darlgreybold"><?= $data->cGeneralInspection() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Fahrzeugzustand</span></td>
                        <td><span class="darlgreybold"><?= $data->cCondition() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Fahrzeughalter</span></td>
                        <td><span class="darlgreybold"><?= $data->cNumberOfPreviousOwnersN() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Garantie</span></td>
                        <td><span class="darlgreybold"><?= $data->cWarranty() ?></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Scheckheftgepflegt</span></td>
                        <td><span class="darlgreybold"><?= $data->cFullServiceHistory() ?></span></td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 10px"><span
                                    class="greylabel">Nichtraucherfahrzeug</span></td>
                        <td style="padding-bottom: 10px"><span
                                    class="darlgreybold"><?= $data->cNonSmokerVehicle() ?></span></td>
                    </tr>
                </table>
                <table width="260pt" cellspacing="0" cellpadding="0" class="overview_table bottom_line">
                    <tr>
                        <td colspan="2" class="no_border" style="padding-bottom: 5px;padding-top: 15px">
                            <p class="h2 blue blue_header normal no_border">FARBE UND MATERIAL</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="175px"><span class="greylabel">Farbe (Hersteller)</span></td>
                        <td width="85px"><span class="darlgreybold"><?= $data->cManufacturerColorName() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Farbe</span></td>
                        <td><span class="darlgreybold"><?= $data->cExteriorColor() ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="greylabel">Ausstattungsfarbe</span></td>
                        <td><span class="darlgreybold"><?= $data->cInteriorColor() ?></span></td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 10px"><span class="greylabel">Innenausstattung</span></td>
                        <td style="padding-bottom: 10px"><span class="darlgreybold"><?= $data->cInteriorType() ?></span></td>
                    </tr>

                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<pagebreak></pagebreak>
<div class="page_body padding-small-top">

    <table  style="overflow: wrap" cellspacing="0" cellpadding="0" class="car_info detail equipment">
        <tbody>
        <tr>
            <td colspan="3" class="no_border" style="padding-top: 5px;padding-bottom: 5px">
                <p class="h2 blue blue_header normal no_border" style="font-size: 11pt">AUSSTATTUNG</p>
            </td>
        </tr>
        <?= $data->extraWidget() ?>
        </tbody>
    </table>
</div>
<?php if ($data->count_images()): ?>
    <pagebreak></pagebreak>
    <div class="page_body padding-small-top">
        <table cellspacing="0" cellpadding="0" class="images">
            <tbody>
            <tr>
                <?php foreach ($data->images() as $key => $image): ?>
                <?php if ($key == 2): ?>
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
                <td style="padding: 10px;" class="<?= $key < 2 ? 'half' : 'one-tree' ?>">
                    <img src="<?= $image ?>" style="margin-top: 20px" alt="">
                </td>
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<pagebreak></pagebreak>
<div class="page_body padding-small-top">
    <p>
        <span class="h1">Vertragsdetails</span>
    </p>
    <table cellspacing="0" cellpadding="0" class="wide contract_details">
        <tbody>
        <tr>
            <td class="one-tree">
                <p>
                    <span class="bold">Vertragsnehmer</span>
                </p>
            </td>
            <td class="one-tree">
                <p>
                    <span><?= $data->rSalutation() ?> <?= $data->rFirstName() ?> <?= $data->rLastName() ?></span><br>
                    <span><?= $data->rStreet() ?> <?= $data->rNumber() ?></span><br>
                    <span><?= $data->rZip() ?> <?= $data->rCity() ?></span><br>
                </p>
            </td>
            <td class="one-tree">
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
                    <span><?= $data->cCondition() ?></span><br>
                    <span>Erstzulassung: <?= $data->cFirstRegistration() ?></span><br>
                    <span>Kilometerstand: <?= $data->cMileage() ?></span><br>
                </p>
            </td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <?= $data->financeDetailWidget() ?>
</div>
<pagebreak></pagebreak>
<div class="page_body padding-small-top">
    <p>
        <span class="h1">Selbstauskunft Privatpersonen</span>
        <span class="h3">Erster Antragsteller</span>
    </p>
    <span class="h3">Persönliche Daten 1. Antragsteller</span>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_salutation">
                                    <span>Anrede</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_salutation" value="<?= $data->rSalutation() ?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_firstName">
                                    <span>Vorname</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_firstName" value="<?= $data->rFirstName() ?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_lastName">
                                    <span>Nachname</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49%"
                                           type="text"
                                           name="personal_data_first_applicant_lastName"  value="<?= $data->rLastName() ?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_birthday">
                                    <span>Geburtstag</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_birthday" value="<?= $data->rBirthday()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_nationality">
                                    <span>Nationalität</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_nationality" value="<?= $data->rNationality()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_birth_name">
                                    <span>Geburtsname (optional)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49%"
                                           type="text"
                                           name="personal_data_first_applicant_birth_name">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_passport_number">
                                    <span>Ausweis-/ Reisepass-ID</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_passport_number">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_passport_valid_until">
                                    <span>gültig bis</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_passport_valid_until">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_issuing_authority">
                                    <span>Ausstellende Behörde</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49%"
                                           type="text"
                                           name="personal_data_first_applicant_issuing_authority">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_street_name">
                                    <span>Straße</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 38.5%"
                                           type="text"
                                           name="personal_data_first_applicant_street_name" value="<?= $data->rStreet()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_street_number">
                                    <span>Nr.</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 9.5%"
                                           type="text"
                                           name="personal_data_first_applicant_street_number" value="<?= $data->rNumber()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_zip">
                                    <span>PLZ</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 15.5%"
                                           type="text"
                                           name="personal_data_first_applicant_zip" value="<?= $data->rZip()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_city">
                                    <span>Ort</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 31.5%"
                                           type="text"
                                           name="personal_data_first_applicant_city"  value="<?= $data->rCity()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_residing_there_since">
                                    <span>dort wohnhaft seit</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_residing_there_since">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_household_persons">
                                    <span>Im Haushalt lebende Personen:</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_household_persons">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_marital_status">
                                    <span>Familienstand</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49%"
                                           type="text"
                                           name="personal_data_first_applicant_marital_status">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_phoneMobile">
                                    <span>Telefon (Mobil)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49.5%"
                                           type="text"
                                           name="personal_data_first_applicant_phoneMobile" value="<?= $data->rPhoneMobile()?>">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_phoneMain">
                                    <span>Telefon (Festnetz)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49.5%"
                                           type="text"
                                           name="personal_data_first_applicant_phoneMain" value="<?= $data->rPhoneMain()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_email">
                                    <span>E-Mail</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 101%"
                                           type="text"
                                           name="personal_data_first_applicant_email" value="<?= $data->rEmail()?>">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_bankverbindung_IBAN">
                                    <span>IBAN</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49.5%"
                                           type="text"
                                           name="personal_data_first_applicant_bankverbindung_IBAN">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_bankverbindung_BIC">
                                    <span>BIC</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49.5%"
                                           type="text"
                                           name="personal_data_first_applicant_bankverbindung_BIC">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <br>
    <br>
    <span class="h3">Berufliche Angaben 1. Antragsteller</span>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td valign="top">
                                <span>Berufsverhältnis</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 50%">
                    <table>
                        <tbody>
                        <tr>
                            <td style="padding-right:10px; padding-top: 10px" valign="top">
                                <label for="Arbeiter">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Arbeiter">
                                </label>
                            </td>
                            <td style="padding-top: 12px">
                                <span>Arbeiter/-in</span>
                            </td>
                            <td style="padding-top: 10px;padding-left:10px;padding-right:10px;" valign="top">
                                <label for="Beamtin">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Beamtin">
                                </label>

                            </td>
                            <td style="padding-top: 12px">
                                <span>Beamtin/-er</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-right:10px;" valign="top">
                                <label for="Angestellte">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Angestellte">
                                </label>
                            </td>
                            <td style="padding-top: 2px">
                                <span>Angestellte/r</span>
                            </td>
                            <td style="padding-left:10px;padding-right:10px;" valign="top">
                                <label for="Rentner_altersbedingt">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Rentner_altersbedingt">
                                </label>

                            </td>
                            <td style="padding-top: 2px">
                                <span>Rentner/-in (altersbedingt)</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-right:10px;" valign="top">
                                <label for="Selbstndig">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Selbstndig">
                                </label>
                            </td>
                            <td style="padding-top: 2px">
                                <span>Selbständig*</span>
                            </td>
                            <td style="padding-left:10px;padding-right:10px;" valign="top">
                                <label for="Hausfrau_mann">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Hausfrau_mann">
                                </label>

                            </td>
                            <td style="padding-top: 2px">
                                <span>Hausfrau/-mann</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td style="width: 50%" valign="bottom">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_occupation">
                                    <span>Berufsbezeichnung/Branche</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="professional_data_first_applicant_occupation">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_unternehmensgrundung">
                                    <span>Unternehmensgründung *</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_first_applicant_unternehmensgrundung">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_street2">
                                    <span>Anschrift des Arbeitgebers/Unternehmens, Straße</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 38%"
                                           type="text"
                                           name="personal_data_first_applicant_street2">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_street_number2">
                                    <span>Nr.</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 10%"
                                           type="text"
                                           name="personal_data_first_applicant_street_number2">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_firma_name">
                                    <span>Firmenname des Arbeitgebers/Unternehmens</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="personal_data_first_applicant_firma_name">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_company_zip">
                                    <span>PLZ</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 15.5%"
                                           type="text"
                                           name="professional_data_first_applicant_company_zip">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_company_zip_code">
                                    <span>Ort</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32.5%"
                                           type="text"
                                           name="professional_data_first_applicant_company_zip_code">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_employed_since">
                                    <span>Beschäftigt seit (MM/JJJJ)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 20%"
                                           type="text"
                                           name="professional_data_first_applicant_employed_since">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_employed_old">
                                    <span>Zeitraum der Befristung (falls zutreffend)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 28%"
                                           type="text"
                                           name="professional_data_first_applicant_employed_old">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <span style="font-size: 6pt">*für gewerblich Selbstständige</span>
    </form>
</div>
<pagebreak></pagebreak>
<div class="page_body padding-small-top">
    <span class="h3">Regelmäßige monatliche Einnahmen 1. Antragsteller</span>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_net_income_monthly">
                                    <span>Nettoeinkommen monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_first_applicant_net_income_monthly">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_further_income_monthly">
                                    <span>Weitere Einkünfte monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_first_applicant_further_income_monthly">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_maintenance_receipt_monthly">
                                    <span>Unterhaltseingang monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_first_applicant_maintenance_receipt_monthly">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_number_dependent_children">
                                    <span>Anzahl der unterhaltspflichtigen Kinder</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49%"
                                           type="text"
                                           name="professional_data_first_applicant_number_dependent_children">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_number_children_entitled_children">
                                    <span>Anzahl kindergeldberechtigter Kinder</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49%"
                                           type="text"
                                           name="professional_data_first_applicant_number_children_entitled_children">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </form>

    <br>
    <span class="h3">Regelmäßige monatliche Ausgaben 1. Antragsteller</span>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td valign="top">
                                <span>Wohnart</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 50%">
                    <table>
                        <tbody>
                        <tr>
                            <td style="padding-right:10px; padding-top: 10px" valign="top">
                                <label for="professional_data_first_applicant_rental_fee">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="professional_data_first_applicant_rental_fee">
                                </label>
                            </td>
                            <td style="padding-top: 12px">
                                <span>Miete</span>
                            </td>
                            <td style="padding-left:10px;padding-right:10px;padding-top: 10px" valign="top">
                                <label for="professional_data_first_applicant_living_with_parents">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="professional_data_first_applicant_living_with_parents">
                                </label>
                            </td>
                            <td style="padding-top: 12px">
                                <span>wohnhaft bei den Eltern</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-right:10px;" valign="top">
                                <label for="professional_data_first_applicant_condominium">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="professional_data_first_applicant_condominium">
                                </label>
                            </td>
                            <td style="padding-top: 2px">
                                <span>Eigentumswohnung</span>
                            </td>
                            <td style="padding-left:10px;padding-right:10px;" valign="top">
                                <label for="professional_data_first_applicant_house">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="professional_data_first_applicant_house">
                                </label>
                            </td>
                            <td style="padding-top:2px">
                                <span>Haus</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td style="width: 50%" valign="bottom">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_warm_pro_rent_month">
                                    <span>Warmmiete pro Monat in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="professional_data_first_applicant_warm_pro_rent_month">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_further_issues_monthly">
                                    <span>Weitere Ausgaben monatlich €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="professional_data_first_applicant_further_issues_monthly">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_maintenance_further_monthly">
                                    <span>Weitere Ausgaben monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_first_applicant_maintenance_further_monthly">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_first_applicant_further2_income_monthly">
                                    <span>Unterhaltseingang monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_first_applicant_further2_income_monthly">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_fourth_applicant_maintenance_receipt_monthly">
                                    <span>Kosten für Hypothek im Monat in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_fourth_applicant_maintenance_receipt_monthly">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <br>
    <span class="h3">Zweiter Antragsteller</span>
    <p>Wenn Sie einen zweiten Antragsteller in Ihrem Kreditvertrag aufnehmen, hat das unter Umständen positive
        Auswirkungen auf die Wahrscheinlichkeit
        einer Bewilligung Ihres Finanzierungsantrages. Hierzu benötigt auto.de auch die persönlichen Daten Ihres
        Mitantragssteller.</p>
    <span class="h3">Persönliche Daten 2. Antragsteller</span>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_salutation">
                                    <span>Anrede</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 25%"
                                           type="text"
                                           name="personal_data_second_applicant_salutation">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_firstName">
                                    <span>Vorname</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 25%"
                                           type="text"
                                           name="personal_data_second_applicant_firstName">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_lastName">
                                    <span>Nachname</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="personal_data_second_applicant_lastName">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_birthday">
                                    <span>Geburtstag</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 25%"
                                           type="text"
                                           name="personal_data_second_applicant_birthday">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_nationality">
                                    <span>Nationalität</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 25%"
                                           type="text"
                                           name="personal_data_second_applicant_nationality">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_birth_name">
                                    <span>Geburtsname (optional)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="personal_data_second_applicant_birth_name">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_passport_number">
                                    <span>Ausweis-/ Reisepass-ID</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 25%"
                                           type="text"
                                           name="personal_data_second_applicant_passport_number">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_passport_valid_until">
                                    <span>gültig bis</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 25%"
                                           type="text"
                                           name="personal_data_second_applicant_passport_valid_until">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_issuing_authority">
                                    <span>Ausstellende Behörde</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="personal_data_second_applicant_issuing_authority">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_street_name">
                                    <span>Straße</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 38.5%"
                                           type="text"
                                           name="personal_data_second_applicant_street_name">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_street_number">
                                    <span>Nr.</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 11%"
                                           type="text"
                                           name="personal_data_second_applicant_street_number">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_zip">
                                    <span>PLZ</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 15%"
                                           type="text"
                                           name="personal_data_second_applicant_zip">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_city">
                                    <span>Ort</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 33%"
                                           type="text"
                                           name="personal_data_second_applicant_city">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_residing_there_since">
                                    <span>dort wohnhaft seit</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 25%"
                                           type="text"
                                           name="personal_data_second_applicant_residing_there_since">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_household_persons">
                                    <span>Im Haushalt lebende Personen</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 25%"
                                           type="text"
                                           name="personal_data_second_applicant_household_persons">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_marital_status">
                                    <span>Familienstand</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="personal_data_second_applicant_marital_status">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_phoneMobile">
                                    <span>Telefon (Mobil)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 51%"
                                           type="text"
                                           name="personal_data_second_applicant_phoneMobile">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_first_applicant_phoneMain">
                                    <span>Telefon (Festnetz)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 51%"
                                           type="text"
                                           name="personal_data_second_applicant_phoneMain">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_email">
                                    <span>E-Mail</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 104%"
                                           type="text"
                                           name="personal_data_second_applicant_email">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_bankverbindung_IBAN">
                                    <span>IBAN</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 51%"
                                           type="text"
                                           name="personal_data_second_applicant_bankverbindung_IBAN">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_bankverbindung_BIC">
                                    <span>BIC</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 51%"
                                           type="text"
                                           name="personal_data_second_applicant_bankverbindung_BIC">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<pagebreak></pagebreak>
<div class="page-body padding-small-top">
    <span class="h3">Berufliche Angaben 2. Antragsteller</span>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td valign="top">
                                <span>Berufsverhältnis</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 50%">
                    <table>
                        <tbody>
                        <tr>
                            <td style="padding-right:10px; padding-top: 10px" valign="top">
                                <label for="Arbeiter_second">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Arbeiter_second">
                                </label>
                            </td>
                            <td style="padding-top: 12px">
                                <span>Arbeiter/-in</span>
                            </td>
                            <td style="padding-top: 10px;padding-left:10px;padding-right:10px;" valign="top">
                                <label for="Beamtin_second">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Beamtin_second">
                                </label>

                            </td>
                            <td style="padding-top: 12px">
                                <span>Beamtin/-er</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-right:10px;" valign="top">
                                <label for="Angestellte_second">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Angestellte_second">
                                </label>
                            </td>
                            <td style="padding-top: 2px">
                                <span>Angestellte/r</span>
                            </td>
                            <td style="padding-left:10px;padding-right:10px;" valign="top">
                                <label for="Rentner_altersbedingt_second">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Rentner_altersbedingt_second">
                                </label>

                            </td>
                            <td style="padding-top: 2px">
                                <span>Rentner/-in (altersbedingt)</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-right:10px;" valign="top">
                                <label for="Selbstndig_second">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Selbstndig_second">
                                </label>
                            </td>
                            <td style="padding-top: 2px">
                                <span>Selbständig*</span>
                            </td>
                            <td style="padding-left:10px;padding-right:10px;" valign="top">
                                <label for="Hausfrau_mann_second">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="Hausfrau_mann_second">
                                </label>

                            </td>
                            <td style="padding-top: 2px">
                                <span>Hausfrau/-mann</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td style="width: 50%" valign="bottom">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_occupation">
                                    <span>Berufsbezeichnung/Branche</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="professional_data_second_applicant_occupation">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_unternehmensgrundung">
                                    <span>Unternehmensgründung *</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="personal_data_second_applicant_unternehmensgrundung">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_street2">
                                    <span>Anschrift des Arbeitgebers/Unternehmens, Straße</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 38%"
                                           type="text"
                                           name="personal_data_second_applicant_street2">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_street_number2">
                                    <span>Nr.</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 10%"
                                           type="text"
                                           name="personal_data_second_applicant_street_number2">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="personal_data_second_applicant_firma_name">
                                    <span>Firmenname des Arbeitgebers/Unternehmens</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 50%"
                                           type="text"
                                           name="personal_data_second_applicant_firma_name">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_company_zip">
                                    <span>PLZ</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 15.5%"
                                           type="text"
                                           name="professional_data_second_applicant_company_zip">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_company_zip_code">
                                    <span>Ort</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32.5%"
                                           type="text"
                                           name="professional_data_second_applicant_company_zip_code">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_employed_since">
                                    <span>Beschäftigt seit (MM/JJJJ):</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 20%"
                                           type="text"
                                           name="professional_data_second_applicant_employed_since">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_employed_old">
                                    <span>Zeitraum   der   Befristung (falls zutreffend)</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 28%"
                                           type="text"
                                           name="professional_data_second_applicant_employed_old">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <span style="font-size: 6pt">*für gewerblich Selbstständige</span>
    </form>
    <br>
    <span class="h3">Regelmäßige monatliche Einnahmen 2. Antragsteller</span>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_net_income_monthly">
                                    <span>Nettoeinkommen monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_second_applicant_net_income_monthly">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_further_income_monthly">
                                    <span>Weitere Einkünfte monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_second_applicant_further_income_monthly">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_maintenance_receipt_monthly">
                                    <span>Unterhaltseingang monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_second_applicant_maintenance_receipt_monthly">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_number_dependent_children">
                                    <span>Anzahl der unterhaltspflichtigen Kinder</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49%"
                                           type="text"
                                           name="professional_data_second_applicant_number_dependent_children">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_number_children_entitled_children">
                                    <span>Anzahl kindergeldberechtigter Kinder</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 49%"
                                           type="text"
                                           name="professional_data_second_applicant_number_children_entitled_children">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <br>
    <span class="h3">Regelmäßige monatliche Ausgaben 2. Antragsteller</span>
    <form>
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td valign="top">
                                <span>Wohnart</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 50%">
                    <table>
                        <tbody>
                        <tr>
                            <td style="padding-right:10px; padding-top: 10px" valign="top">
                                <label for="professional_data_second_applicant_rental_fee">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="professional_data_second_applicant_rental_fee">
                                </label>
                            </td>
                            <td style="padding-top: 12px">
                                <span>Miete</span>
                            </td>
                            <td style="padding-left:10px;padding-right:10px;padding-top: 10px" valign="top">
                                <label for="professional_data_second_applicant_living_with_parents">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="professional_data_second_applicant_living_with_parents">
                                </label>
                            </td>
                            <td style="padding-top: 12px">
                                <span>wohnhaft bei den Eltern</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-right:10px;" valign="top">
                                <label for="professional_data_second_applicant_condominium">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="professional_data_second_applicant_condominium">
                                </label>
                            </td>
                            <td style="padding-top: 2px">
                                <span>Eigentumswohnung</span>
                            </td>
                            <td style="padding-left:10px;padding-right:10px;" valign="top">
                                <label for="professional_data_second_applicant_house">
                                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                                           name="professional_data_second_applicant_house">
                                </label>
                            </td>
                            <td style="padding-top:2px">
                                <span>Haus</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td style="width: 50%" valign="bottom">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_warm_pro_rent_month">
                                    <span>Warmmiete pro Monat in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="professional_data_second_applicant_warm_pro_rent_month">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_further_issues_monthly">
                                    <span>Weitere Ausgaben monatlich €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 24%"
                                           type="text"
                                           name="professional_data_second_applicant_further_issues_monthly">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <form class="form-all">
        <table cellspacing="0" cellpadding="0" class="wide">
            <tbody>
            <tr>
                <td style="width: 100%">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_maintenance_further_monthly">
                                    <span>Weitere Ausgaben monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_second_applicant_maintenance_further_monthly">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_further2_income_monthly">
                                    <span>Unterhaltseingang monatlich in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_second_applicant_further2_income_monthly">
                                </label>
                            </td>
                            <td>
                                <span style="font-size: 4pt;color: #ffffff;">.</span><br>
                                <label for="professional_data_second_applicant_maintenance_receipt_monthly2">
                                    <span>Kosten für Hypothek im Monat in €</span><br>
                                    <span style="font-size: 2pt;color: #ffffff;">.</span><br>
                                    <input class="fields_color" style="width: 32%"
                                           type="text"
                                           name="professional_data_second_applicant_maintenance_receipt_monthly2">
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<pagebreak></pagebreak>
<div class="page_body lastpage">
    <table>
        <tr>
            <td >
                <span class="pretitle normal">Thomaskirchhof 20<br>
                <span class="pretitle">04109 Leipzig</span><br>
            </td>
        </tr>
    </table>
    <div style="width: 100%;height: 30pt"></div>
    <p class="small_text">
        Guten Tag <?= $data->salesContact() ?>,
    </p>
    <p class="small_text" style="padding-bottom: 15px">
        hiermit übersende ich Ihnen folgende Dokumente im Original, Personalausweises bzw. Reisepass als Kopie:
    </p>
    <form>
        <table width="100%">
            <tbody>
            <tr>
                <td class="last-check" valign="top">
                    <label for="lastpage_die_auto">
                        <input style="background-color: #D9D9D9;color:  rgb(166,166,166);font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_die_auto">
                    </label>
                </td>
                <td class="last-check-span" width="100%">
                    <span style="font-size: 9pt">Die auto.de Checkliste</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" valign="top">
                    <label for="lastpage_den_unterschriftenblatter">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_den_unterschriftenblatter">
                    </label>

                </td>
                <td class="last-check-span" width="100%">
                    <span style="font-size: 9pt">Die  Unterschriftenblätter</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" valign="top">
                    <label for="lastpage_den_kaufvertrag_inkl">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_den_kaufvertrag_inkl">
                    </label>

                </td>
                <td class="last-check-span" width="100%">
                    <span style="font-size: 9pt">Den Kaufvertrag inkl. Verkäufer AGB</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" valign="top">
                    <label for="lastpage_ihren_Finanzierungsantrag">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_ihren_Finanzierungsantrag">
                    </label>
                </td>
                <td class="last-check-span" width="100%">
                    <span style="font-size: 9pt">Ihren Finanzierungsantrag</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" valign="top">
                    <label for="lastpage_den_auftrag_fur">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_den_auftrag_fur">
                    </label>
                </td>
                <td class="last-check-span" width="100%">
                    <span style="font-size: 9pt">Den Auftrag für Ihre gewählten zusätzlichen Services</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" valign="top">
                    <label for="lastpage_eine_farbkopie_ihres">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_eine_farbkopie_ihres">
                    </label>

                </td>
                <td class="last-check-span" width="100%">
                    <span style="font-size: 9pt">Eine  Farbkopie  Ihres  Personalausweises  (lesbar:  Vorder-  und  Rückseite  /  komplett  abgebildet  mit
                allen Rändern) oder die Farbkopie Ihres Reisepasses (inkl. Meldebescheinigung: nicht älter als 3 Monate)</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" valign="top">
                    <label for="lastpage_einkommensnachweise_der_letzten">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_einkommensnachweise_der_letzten">
                    </label>
                </td>
                <td class="last-check-span" width="100%" style="padding-top: 2px;padding-bottom:25px;">
                    <span style="font-size: 9pt">Einkommensnachweise der letzten 3 Monate</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" valign="top">
                    <label for="lastpage_response_method">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_response_method">
                    </label>
                </td>
                <td class="last-check-span" width="100%">
                    <span style="font-size: 9pt">Meine oben genannten Dokumente habe ich Ihnen bereits vorab per</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" style="padding-bottom:5px;" valign="top"></td>
                <td class="last-check-span" width="100%"><label for="lastpage_fax">
                    <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                        name="lastpage_fax">
                    </label>
                    <span style="border-left: 12px solid rgb(250,255,255) ; font-size: 9pt">Fax</span>
                </td>
            </tr>
            <tr>
                <td class="last-check" style="padding-bottom:5px;" valign="top"></td>
                <td class="last-check-span" width="100%">
                    <label for="lastpage_email">
                        <input style="background-color: #ffffff;font-size: 12pt;" type="checkbox" value="0"
                               name="lastpage_email">
                    </label>
                    <span style="border-left: 12px solid rgb(250,255,255) ; font-size: 9pt">E-Mail</span>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <span>gesendet.</span>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td style="width: 140pt;">
                    <span>Ort, Datum</span><br>
                    <span style="font-size: 4pt;color: #ffffff;">.</span>
                </td>
                <td style="width: 10pt"></td>
                <td style="width: 400pt;">
                    <span>Unterschrift Vertragsnehmer | Rückantwort</span><br>
                    <span style="font-size: 4pt;color: #ffffff;">.</span>
                </td>
            </tr>
            <tr>
                <td class="ort" align="middle">
                    <label for="ort_datum_vermittlungsauftrag">
                        <input type="text" class="ort_input" name="ort_datum_vermittlungsauftrag">
                    </label>
                </td>
                <td style="width: 10pt"></td>
                <td align="middle" class="ort_grey">
                    <span class="grey_box">
                        &#10005;
                    </span>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
</body>
</html>