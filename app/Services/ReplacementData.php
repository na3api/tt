<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 3/4/19
 * Time: 3:20 PM
 */

namespace App\Services;

use Aiken\i18next\i18next;
use App\Request;

class ReplacementData
{
    const TIMEZONE = 'Europe/Berlin';

    /* FORMATING */
    const NUMBER = 1;
    const MONEY = 2;
    const DATE = 3;
    const YESNO = 4;

    const NA = 'N/A';
    const SU = 'selector_unknown';

    const EMISSION_STICKERS_ICONS = [
        'selector_emissionSticker_red' =>     'offer/selector_emissionSticker_red.png',
        'selector_emissionSticker_yellow' =>  'offer/selector_emissionSticker_yellow.png',
        'selector_emissionSticker_green' =>   'offer/selector_emissionSticker_green.png',
        'selector_unknown' =>                 'offer/question.svg'
    ];

    const GENDERS = [
        0 => 'GENDER_OTHER_LABEL' ,
        1 => 'GENDER_MALE_LABEL' ,
        2 => 'GENDER_FEMALE_LABEL',
    ];

    public $accordion = [
        "tableEngine"=> "Daten Motor und Getriebe",
        "tableDimensions"=> "Maße und Abmessungen",
        "tableEnvironment"=> "Umwelt",
        "tableAvailability"=> "Zustand und Verfügbarkeit",
        "tableMaterial"=> "Farbe und Material",
        "tableEqipment"=> "Ausstattung",
        "captionOverview"=> "ÜBERBLICK",
        "captionHighlights"=> "HIGHLIGHTS",
        "captionVehicleDetails"=> "FAHRZEUGDETAILS",
        "captionFuels"=> "Kraftstoffe",
        "captionCylinder"=> "Zylinder/-anordnung",
        "captionCapacity"=> "Hubraum",
        "captionPower"=> "Leistung",
        "captionTorque"=> "Drehmoment",
        "captionAcceleration"=> "Beschleunigung",
        "captionTopspeed"=> "Höchst­geschwindigkeit",
        "captionTransmission"=> "Getriebe",
        "captionDrive"=> "Antrieb",
        "captionTankcapacity"=> "Tankvolumen",
        "captionLength"=> "Länge",
        "captionWidth"=> "Breite",
        "captionHeight"=> "Höhe",
        "captionWheelBase"=> "Radstand",
        "captionLoadingVolume"=> "Ladevolume",
        "captionBootCapacity"=> "Kofferraumvolumen",
        "captionDoors"=> "Türen",
        "captionSeats"=> "Sitze",
        "captionTare"=> "Leergewicht",
        "captionMaximumWeight"=> "Zulässiges Gesamtgewicht",
        "captionTrailerLoadBraked"=> "Anhängelast (gebremst)",
        "captionTrailerLoadUnbraked"=> "Anhängelast (ungebremst)",
        "captionConsumptionInTown"=> "Verbrauch innerorts",
        "captionConsumptionOutOfTown"=> "Verbrauch außerorts",
        "captionConsumptionCom"=> "Verbrauch (komb.)*",
        "captionCo2EmissionsCom"=> "CO2-Ausstoß (komb.)*",
        "captionEmissionClass"=> "Emissionsklasse",
        "captionEmissionsSticker"=> "Feinstaubplakette",
        "captionCo2Efficiency"=> "CO-2-Effizienz",
        "captionSubTitle"=> "*Auf der Grundlage der gemessenen CO-2 Emissionen unter Berücksichtigung der Masse des Fahrzeugs ermittelt.",
        "captionAvailability"=> "Verfügbarkeit",
        "captionGeneralInspection"=> "Hauptuntersuchung",
        "captionVehicleCondition"=> "Fahrzeugzustand",
        "captionVehicleOwners"=> "Fahrzeughalter",
        "captionGuarantee"=> "Garantie",
        "captionMaintenanceGuide"=> "Scheckheftgepflegt",
        "captionNonSmokingVehicle"=> "Nichtraucherfahrzeug",
        "captionColorManufacturer"=> "Farbe (Hersteller)",
        "captionColour"=> "Farbe",
        "captionAppointmentsColor"=> "Ausstattungsfarbe",
        "captionInteriorDecoration"=> "Innenausstattung",
        "captionAssistanceSystems"=> "Assistenzsysteme",
        "captionAirbags"=> "Airbags",
        "captionParkingAid"=> "Einparkhilfe",
        "captionAirConditioning"=> "Klimatisierung",
        "captionHeater"=> "Heizung",
        "captionMultimedia"=> "Multimedia",
        "captionSteeringWheel"=> "Lenkrad",
        "captionLight"=> "Licht",
        "captionSlices"=> "Scheiben",
        "captionMirror"=> "Spiegel",
        "captionWheelsLandingGear"=> "Räder | Fahrwerk",
        "captionExtras"=> "Extras",
    ];

    /**
     * @var array
     */
    private $replacements = [
        'requestNumber' => 'requestNumber',
        'hnr' => 'hnr',
        'date' => 'date',
        'time' => 'time',
        'salesContact' => 'salesContact',
        /* user|dealer */
        'uEmail' => 'user.email',
        'uSalutation' => 'user.privateAddress.gender',
        'uFirstName' => 'user.privateAddress.firstName',
        'uLastName' => 'user.privateAddress.lastName',
        'uStreet' => 'user.privateAddress.street',
        'uNumber' => 'user.privateAddress.number',
        'uZip' => 'user.privateAddress.zip',
        'uCity' => 'user.privateAddress.city',
        'uPhoneMain' => 'user.privateAddress.phoneMain',
        'uPhoneMobile' => 'user.privateAddress.phoneMobile',
        'uCompany' => 'user.privateAddress.company',
        'uUstIdNr' => ['key' => 'user.privateAddress.ustIdNr', 'default' => self::NA],
        'uFax' => ['key' => 'user.privateAddress.fax', 'default' => self::NA],
        'uCommercialRegister' => ['key' => 'user.privateAddress.commercialRegister', 'default' => self::NA],
        'uCommercialRegisterNumber' => ['key' => 'user.privateAddress.commercialRegisterNumber', 'default' => self::NA],
        'uTermCond' => ['key' => 'user.termCond.de'],
        'uTermCondEN' => ['key' => 'user.termCond.en'],

        'rEmail' => 'requestUser.email',
        'rPhoneMain' => 'requestUser.privateAddress.phoneMain',
        'rPhoneMobile' => 'requestUser.privateAddress.phoneMobile',
        'rSalutation' => ['key' => 'requestUser.privateAddress.gender'],
        'rFirstName' => 'requestUser.privateAddress.firstName',
        'rLastName' => 'requestUser.privateAddress.lastName',
        'rStreet' => 'requestUser.privateAddress.street',
        'rNumber' => 'requestUser.privateAddress.number',
        'rZip' => 'requestUser.privateAddress.zip',
        'rCity' => 'requestUser.privateAddress.city',
        'rCompany' => 'requestUser.privateAddress.company',
        'rBirthday' => 'requestUser.privateAddress.birthday',
        'rNationality' => 'requestUser.privateAddress.country.name',
        'cMake' => 'car.mainData.make',
        'cModel' => 'car.mainData.model',
        'cSubModel' => 'car.mainData.subModel',
        'cId' => 'car.metaData.vehicleId',
        'cCountryVersion' => ['key' => 'car.mainData.countryVersion'],
        'cTaxi' => ['key' => 'car.mainData.taxi'],
        'cCurrentSalesPrice' => ['key' => 'car.price.currentSalesPrice', 'format' => self::MONEY],
        'cWasPrice' => ['key' => 'car.price.wasPrice'],
        'cVatRate' => ['key' => 'car.price.vatRate'],

        'cMileage' => ['key' => 'car.mainData.mileage', 'format' => self::NUMBER, 'mask' => '%s km', 'default' => self::NA],
        'cVin' => ['key' => 'car.metaData.vin'],
        'cUsageType' => ['key' => 'car.mainData.usageType', 'default' => self::NA],
        'cNextInspection' => ['key' => 'car.careService.nextInspection', 'format' => self::DATE],
        'cMileageN' => ['key' => 'car.mainData.mileage'],
        'cFirstRegistration' => ['key' => 'car.mainData.firstRegistration', 'format' => self::DATE, 'default' => self::NA],
        'cFirstOwner' => ['key' => 'car.mainData.numberOfPreviousOwners'],
        'cCondition' => ['key' => 'car.mainData.condition'],
        'cNumberOfPreviousOwners' => ['key' => 'car.mainData.numberOfPreviousOwners'],
        'cNumberOfPreviousOwnersN' => ['key' => 'car.mainData.numberOfPreviousOwners', 'default' => 0],
        'cGearbox' => ['key' => 'car.driveSuspension.gearbox', 'default' => self::NA],
        'cFuel' => ['key' => 'car.consumption.fuel', 'default' => self::NA],
        'cDoorsN' => ['key' => 'car.mainData.doors'],
        'cDoors' => ['key' => 'car.mainData.doors', 'mask' => '%s Türen', 'default' => self::NA],
        'cPower' => ['mask' => '%s kW (%s PS)', 'key' => ['car.engineData.powerKW', 'car.engineData.powerPS'], 'default' => self::NA],
        'cPowerPS' => ['key' => 'car.engineData.powerPS'],
        'cPowerAlternateView' => ['mask' => '%s kW / %s PS)', 'key' => ['car.engineData.powerKW', 'car.engineData.powerPS'], 'default' => self::NA],
        'cConsumption' => ['key' => 'car.consumption.consumptionCombined', 'mask' => '%sl/100 km (komb*)', 'default' => self::NA],
        'cCo2Comb' => ['key' => 'car.environmentEmissions.co2', 'format' => self::NUMBER, 'mask' => '%s g CO2/km (komb)*', 'default' => self::NA],
        'cCo2' => ['key' => 'car.environmentEmissions.co2', 'format' => self::NUMBER, 'mask' => '%s g/km ', 'default' => self::NA],
        'cEnergyEfficiencyClass' => 'car.environmentEmissions.energyEfficiencyClass',
        'cDrive' => ['key' => 'car.driveSuspension.driveType', 'default' => self::NA],
        'cAcceleration' => ['key' => 'car.engineData.acceleration100', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s s (0-100 km/h)'],
        'cCylinders' => ['key' => 'car.engineData.cylinders', 'default' => self::NA],
        'cCubicCapacity' => ['key' => 'car.engineData.cubicCapacity', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s cm³'],
        'cTorque' => ['key' => 'car.engineData.torque', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s Nm'],
        'cHighSpeed' => ['key' => 'car.engineData.highSpeed', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s km/h'],
        'cFuelCapacity' => ['key' => 'car.sizeVolumeWeight.fuelCapacity', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s l'],
        'cHsn' => ['key' => 'car.metaData.hsn', 'default' => self::NA],
        'cTsn' => ['key' => 'car.metaData.tsn', 'default' => self::NA],
        'cLength' => ['key' => 'car.sizeVolumeWeight.length', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s mm'],
        'cWidth' => ['key' => 'car.sizeVolumeWeight.width', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s mm'],
        'cHeight' => ['key' => 'car.sizeVolumeWeight.height', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s mm'],
        'сWheelBase' => ['key' => 'car.driveSuspension.wheelBase', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s mm'],
        'cCapacityLoad' => ['key' => 'car.sizeVolumeWeight.capacityLoad', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s l'],
        'cCargoCapacity' => ['key' => 'car.sizeVolumeWeight.cargoCapacity', 'default' => self::NA, 'format' => self::NUMBER, 'mask' => '%s l'],
        'cSeats' => ['key' => 'car.mainData.seats', 'default' => self::NA],
        'cTare' => ['key' => 'car.sizeVolumeWeight'],
        'cTrailerWeightBraked' => ['key' => 'car.sizeVolumeWeight.trailerWeightBraked', 'format' => self::NUMBER, 'mask' => '%s kg', 'default' => self::NA],
        'cTrailerWeightUnbraked' => ['key' => 'car.sizeVolumeWeight.trailerWeightUnbraked', 'format' => self::NUMBER, 'mask' => '%s kg', 'default' => self::NA],
        'cEmissionClass' => ['key' => 'car.environmentEmissions.emissionClass', 'default' => self::NA],
        'cConsumptionInner' => ['key' => 'car.consumption.consumptionInner'],
        'cConsumptionUnit' => ['key' => 'car.consumption.consumptionUnit'],
        'cConsumptionOuter' => ['key' => 'car.consumption.consumptionOuter'],
        'cConsumptionCombined' => ['key' => 'car.consumption.consumptionCombined', ''],
        'cEmissionSticker' => 'car.environmentEmissions.emissionSticker',
        'сOfferAvailability' => ['key' => 'car.offer.offerAvailability', 'default' => self::NA],
        'cGeneralInspection' => ['key' => 'car.careService.generalInspection', 'format' => self::DATE, 'default' => self::NA],
        'cWarranty' => ['key' => 'car.offer.warranty', 'format' => self::YESNO, 'default' => self::NA],
        'cFullServiceHistory' => ['key' => 'car.careService.fullServiceHistory', 'format' => self::YESNO, 'default' => self::NA],
        'cNonSmokerVehicle' => ['key' => 'car.mainData.nonSmokerVehicle', 'format' => self::YESNO, 'default' => self::NA],
        'cManufacturerColorName' => ['key' => 'car.exterior.manufacturerColorName', 'default' => self::NA],
        'cExteriorColor' => ['key' => 'car.exterior.exteriorColor', 'default' => self::NA],
        'cInteriorColor' => ['key' => 'car.interior.interiorColor', 'default' => self::NA],
        'cInteriorType' => ['key' => 'car.interior.interiorType', 'default' => self::NA],
        'cAvailabilityMode' => ['key' => 'car.offer.availabilityMode', 'default' => self::NA],

        'purchasePrice' => ['key' => 'query.purchasePrice'],
        'firstInstallment' => ['key' => 'query.firstInstallment'],
        'paybackPeriod' => ['key' => 'query.paybackPeriod', 'default' => 60],
        'annualMileage' => ['key' => 'query.annualMileage', 'default' => 15000],
        'hasPaymentProtection' => ['key' => 'query.hasPaymentProtection', 'default' => false],

        'qMonthlyInstallment' => ['key' => 'query.monthlyInstallment'],
        'qOnetimeSpecialPayment' => ['key' => 'query.onetimeSpecialPayment'],
        'qNetLoanAmount' => ['key' => 'query.netLoanAmount'],
        'qPaymentProtectionInsurance' => ['key' => 'query.paymentProtectionInsurance'],
        'qPaybackPeriod' => ['key' => 'query.paybackPeriod'],
        'qFinalInstallment' => ['key' => 'query.finalInstallment'],
        'qGrossLoanAmount' => ['key' => 'query.grossLoanAmount'],
        'qGrossLoanAmountWithoutFinalInstallment' => ['key' => 'query.grossLoanAmountWithoutFinalInstallment'],
        'qNominalInterestRate' => ['key' => 'query.nominalInterestRate'],
        'qAnnualPercentageRate' => ['key' => 'query.annualPercentageRate'],
        'qOfferId' => ['key' => 'query.offerId'],
    ];

    private $hightlights = [
        [ 'name' => 'startStopSystem',          'section' => 'engineData',      'icon' => 'offer/startStopSystem.svg',  'priority' => 1 ],
        [ 'name' => 'driveType',                'section' => 'driveSuspension', 'icon' => 'offer/%s.svg',               'priority' => 2 ],
        [ 'name' => 'interiorType',             'section' => 'interior',        'icon' => 'offer/%s.svg',               'priority' => 3 ],
        [ 'name' => 'panoramicGlassRoof',       'section' => 'window',          'icon' => 'offer/panoramic-roof.svg',   'priority' => 213 ],
        [ 'name' => 'electricHeated',           'section' => 'seats',           'icon' => 'offer/seats.svg',            'priority' => 347 ],
        [ 'name' => 'automaticRainSensor',      'section' => 'assistants',      'icon' => 'offer/wipers.svg',           'priority' => 169 ],
        [ 'name' => 'cruiseControl',            'section' => 'assistants',      'icon' => 'offer/cruise-controll.svg',  'priority' => 236 ],
        [ 'name' => 'headUpDisplay',            'section' => 'assistants',      'icon' => 'offer/head-display.svg',     'priority' => 312 ],
        [ 'name' => 'abs',                      'section' => 'assistants',      'icon' => 'offer/abs.svg',              'priority' => 208 ],
        [ 'name' => 'esp',                      'section' => 'assistants',      'icon' => 'offer/eps.svg',              'priority' => 384 ],
        [ 'name' => 'collisionAvoidance',       'section' => 'assistants',      'icon' => 'offer/no-image.svg',         'priority' => 443 ],
        [ 'name' => 'parkingAssistants',        'section' => 'assistants',      'icon' => 'offer/parkingAssistants.svg', 'priority' => 23 ],
        [ 'name' => 'TrafficSignRecognition',   'section' => 'assistants',      'icon' => 'offer/TrafficSignRecognition.svg', 'priority' => 495 ],
        [ 'name' => 'xenonHeadlights',          'section' => 'lights',          'icon' => 'offer/led.svg',              'priority' => 338 ],
        [ 'name' => 'ledHeadlights',            'section' => 'lights',          'icon' => 'offer/led.svg',              'priority' => 369 ],
        [ 'name' => 'laserHeadlights',          'section' => 'lights',          'icon' => 'offer/led.svg',              'priority' => 207 ],
        [ 'name' => 'lightSensor',              'section' => 'lights',          'icon' => 'offer/lightSensor.svg',      'priority' => 487 ],
        [ 'name' => 'multifunctionalWheel',     'section' => 'wheel',           'icon' => 'offer/wheel.svg',            'priority' => 110 ],
        [ 'name' => 'climatisation',            'section' => 'heatingCooling',  'icon' => 'offer/airCond.svg',          'priority' => 423 ],
        [ 'name' => 'auxiliaryHeating',         'section' => 'heatingCooling',  'icon' => 'offer/auxiliaryHeating.svg', 'priority' => 103 ],
        [ 'name' => 'trailerCouplingFix',       'section' => 'trailerCoupling', 'icon' => 'offer/trailer-hitch.svg',    'priority' => 168 ],
        [ 'name' => 'trailerCouplingRemovable', 'section' => 'trailerCoupling', 'icon' => 'offer/trailer-hitch.svg',    'priority' => 175 ],
        [ 'name' => 'trailerCouplingRotatable', 'section' => 'trailerCoupling', 'icon' => 'offer/trailer-hitch.svg',    'priority' => 463 ],
        [ 'name' => 'navigationSystem',         'section' => 'multimedia',      'icon' => 'offer/navigation.svg',       'priority' => 248 ],
        [ 'name' => 'bluetooth',                'section' => 'multimedia',      'icon' => 'offer/bluetooth.svg',        'priority' => 470 ],
        [ 'name' => 'handsFreePhoneSystem',     'section' => 'multimedia',      'icon' => 'offer/handsFreePhoneSystem.svg', 'priority' => 171 ],
        [ 'name' => 'airbag',                   'section' => 'airbags',         'icon' => 'offer/airbag.svg',           'priority' => 299 ]
    ];

    public $equipments = [
        [
            'title' => 'captionAssistanceSystems',
            'icon' => 'offer/stop.svg',
            'value' => [
                'assistants',
            ],
            'except' => [
                'assistants.parkingSensors',
                'assistants.parkingAssistants'
            ]
        ],
        [
            'title' => 'captionAirbags',
            'icon' => 'offer/assistantSystem.svg',
            'value' => [
                'airbags.airbag'
            ]
        ],
        [
            'title' => 'captionParkingAid',
            'icon' => 'offer/parkingAssistants.svg',
            'value' => [
                'assistants.parkingSensors',
                'assistants.parkingAssistants'
            ]
        ],
        [
            'title' => 'captionAirConditioning',
            'icon' => 'offer/airCondition.svg',
            'value' => [
                'heatingCooling',
                'specialElements.secondaryAirConditioning'
            ],
            'except' => [
                'heatingCooling.auxiliaryHeating'
            ]
        ],
        [
            'title' => 'captionHeater',
            'icon' => 'offer/heating.svg',
            'cats' => [
                'backSeats',
                'coDriverSeats',
                'driverSeats',
            ],
            'value' => [
                'heatingCooling.auxiliaryHeating',
                'wheel.heatedSteeringWheel',
                'seats.electricHeatedRearSeats',
                'seats.backSeats.selector_backSeats_electricHeated',
                'seats.coDriverSeats.selector_coDriverSeats_electricHeated',
                'seats.driverSeats.selector_driverSeats_electricHeated',
                'window.heatedFrontWindow',
                'window.heatedWindshieldWasherSystem',
                'window.rearWindowHeater'
            ]
        ],
        [
            'title' => 'captionMultimedia',
            'icon' => 'offer/bluetooth.svg',
            'value' => ['multimedia']
        ],
        [
            'title' => 'captionSeats',
            'icon' => 'offer/seats.svg',
            'cats' => [
                'backSeats',
                'coDriverSeats',
                'driverSeats',
            ],
            'value' => [
                'seats'
            ],
            'except' => [
                'seats.driverSeats.selector_driverSeats_electricHeated',
                'seats.coDriverSeats.selector_coDriverSeats_electricHeated',
                'seats.backSeats.selector_backSeats_electricHeated',
            ]
        ],
        [
            'title' => 'captionSteeringWheel',
            'icon' => 'offer/multifunctionSteeringWheel.svg',
            'value' => ['wheel'],
            'except' => [
                'wheel.heatedSteeringWheel',
            ]
        ],
        [
            'title' => 'captionLight',
            'icon' => 'offer/light.svg',
            'value' => ['lights']
        ],
        [
            'title' => 'captionDoors',
            'icon' => 'offer/door.svg',
            'value' => ['doors']
        ],
        [
            'title' => 'captionSlices',
            'icon' => 'offer/panoramicSunroof.svg',
            'value' => ['window'],
            'except' => [
                'window.heatedFrontWindow',
                'window.heatedWindshieldWasherSystem',
                'window.rearWindowHeater'
            ],
        ],
        [
            'title' => 'captionMirror',
            'icon' => 'offer/mirror.svg',
            'value' => ['mirrors']
        ],
        [
            'title' => 'captionWheelsLandingGear',
            'icon' => 'offer/full-drive.svg',
            'value' => [
                'wheels.x4AllWeatherTires',
                'wheels.x4SummerTires',
                'wheels.x4WinterTires',
                'assistants.tirePressureMonitor'
            ]
        ],
        [
            'title' => 'captionExtras',
            'icon' => 'offer/new-car.svg',
            'value' =>  [
                'extras'
            ]
        ]
    ];

    /**
     * @var array
    */
    private $data = [];

    /**
     * @var array
    */
    private $car = [];

    /**
     * @var FinanceService
    */
    private $financingDetails = NULL;

    /**
     * ReplacementData constructor.
     * @param DataService $data
     * @param Request $request
     */
    public function __construct(DataService $data, Request $request)
    {
        date_default_timezone_set(self::TIMEZONE);

        $this->car = $data->getCar()['data'];

        /** @var array $replacment_data */
        $replacment_data = array_dot([
            'car' => $this->car,
            'user' => $data->getUser(),
            'requestUser' => $data->getUser($request->query['requestUserId']),
            'query' => $request->query
        ]);

        /** @var array $data */
        $replacement = [
            'images' => []
        ];

        foreach ($this->replacements as $key => $replace){
            if(gettype($replace) === 'array'){
                if(isset($replace['format']) && isset($replace['key']) && isset($replacment_data[$replace['key']])) {
                    if ($replace['format'] === self::MONEY) {
                        $replacement[$key] = number_format($replacment_data[$replace['key']], 2, ",", ".");
                    } elseif ($replace['format'] === self::NUMBER) {
                        $replacement[$key] = number_format($replacment_data[$replace['key']], 0, ",", ".");
                    } elseif ($replace['format'] === self::DATE) {
                        $replacement[$key] = date('m/Y', $replacment_data[$replace['key']]);
                    } elseif ($replace['format'] === self::YESNO) {
                        $replacement[$key] = $replacment_data[$replace['key']] ? TransService::trans('value.yes') : TransService::trans('value.no');
                    }
                }else{
                    if(!is_array($replace['key'])){
                        $replacement[$key] = isset($replacment_data[$replace['key'] ?? '']) ? $replacment_data[$replace['key']] : ($replace['default'] ?? '');
                    }
                }

                if(isset($replace['mask']) && !in_array($replacement[$key] ?? '', [self::NA, self::SU])){
                    $args = [];
                    if(is_array($replace['key'])){
                        foreach ($replace['key'] as $k){
                            $args[] = ($replacment_data[$k] ?? self::NA);
                        }
                        $args = array_merge([$replace['mask']], $args);
                    }else{
                        $args = [$replace['mask'], $replacement[$key]];
                    }

                    $replacement[$key] = call_user_func_array('sprintf', $args);
                }
            }else{
                $replacement[$key] = isset($replacment_data[$replace]) && $replacment_data[$replace] != self::SU ? $replacment_data[$replace] : ($replace['default'] ?? '');
            }

            if(TransService::cbd($replacement[$key])){
                $replacement[$key] = TransService::cbd($replacement[$key]);
            }
        }

        /* Add images to template */
        $images = $data->getImages();

        foreach($images as $key => $image){
            $replacement['images'][$key] = $image;
        }

        foreach ($this->hightlights as $option){
            $high = $replacment_data['car.' . $option['section']. '.' . $option['name']] ?? false;

            if($high && $high !== 'selector_unknown'){
                $option['icon'] = sprintf($option['icon'], $high);
                $option['trans'] = TransService::cbd($option['section']. '_' . $option['name']);

                $replacement['hightlights'][] = $option;
            }
        }

        $replacement['noImage'] = $data->getNoImage();

        /** @var array $this */
        $this->data = $replacement;

        /** @var FinanceService $this */
        $this->financingDetails = new FinanceService($this);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed|string
     */
    public function __call($name, $arguments)
    {
        if(isset($arguments[0]) && $arguments[0]){
            /** @var string $key */
            $key = explode('.', is_array($this->replacements[$name]) ? $this->replacements[$name]['key'] : $this->replacements[$name]);

            return $this->{$key[0]}[$key[1]][$key[2]] ?? $key;
        }else{
            return $this->data[$name] ?? $name;
        }
    }

    public function getData(){
        return $this->data;
    }

    public function requestNumber() : string {
        return $this->data['qOfferId'] ? $this->data['qOfferId'] : 'REQ' . rand(1000, 9999);
    }

    public function date(){
        return date('d. m. Y');
    }

    public function time(){
        return date('H:i');
    }

    public function salesContact(){
        return 'Holger Motscha';
    }

    public function cNumberOfPreviousOwners() : string
    {
        return $this->data[method(__METHOD__)] . ' ' . ($this->data[method(__METHOD__)] == 1 ? TransService::trans('value.vehicleOwners') : TransService::trans('value.vehicleOwners_plural'));
    }

    public function extraWidget(){
        $html = '';

        foreach ($this->equipments as $equipment){
            $html .= '<tr>';
                /* icon */
                $html .= '<td class="divider col-1 check-icon select-icon" style="text-align: center">
                        <img style="max-width: 25pt;height: 25pt; vertical-align: middle" src="'. image_path($equipment['icon']) . '" alt="">
                    </td>';
                /* title */
                $html .= '<td class="divider col-2"><span class="h3">' . $this->accordion[$equipment['title']] . '</span></td>';
                /* equipments */
                $html .= '<td class="divider col-3" style="vertical-align: middle">';

                $list = [];
                foreach ($equipment['value'] as $type => $value) {
                    $new_list = [];
                    $arr_keys = explode('.', $value);

                    $temp_data = clear_list($this->car[$arr_keys[0]]);

                    if(count($arr_keys) == 1){
                        $data = $temp_data;
                    }elseif(count($arr_keys) == 2){
                        $data = $temp_data[$arr_keys[1]];
                    }elseif(count($arr_keys) == 3){
                        $data = $temp_data[$arr_keys[1]][$arr_keys[2]];
                    }

                    if(!$data){
                        //continue;
                    }
                    if (is_array($data)) {
                        $new_list = [$value => $data];
                    } else {
                        $new_list[$value] = $data;
                    }

                    if (!empty($equipment['except'])) {
                        array_except($new_list, $equipment['except']);
                    }

                    $new_list = array_dot($new_list);

                    $list = array_merge($new_list, $list);
                }

                $list = array_reverse($list);
                foreach ($list as $key => $item){
                    if (!empty($equipment['cats'])) {
                        foreach ($equipment['cats'] as $cat){
                            if(strpos($key, $cat) !== false){
                                if(!isset($list[$cat])){
                                    $list = array_merge([$cat => []], $list);
                                }

                                $list[$cat][$key] = $item;

                                unset($list[$key]);
                            }
                        }
                    }
                }

                $html .= $this->addEq($list);

                $html .= '</td>';
            $html .= '</tr>';
        }

        return $html;
    }

    /**
     * @param $list
     * @return string
     */
    private function addEq($list){
        /** @var string $html */
        $html = '';
        foreach ($list as $key => $item){
            if(empty($item)){
                continue;
            }
            if(is_array($item)){
                $html .= '<span style="font-size: 9pt;font-family: arial-bold">' . TransService::trans($key)  .  ': </span>';
                $html .= $this->addEq($item) .'<br>';
            }else{
                $trans_arr = explode('.', $key);
                $trans = null;
                $i = count($trans_arr) - 1;
                $trans_key = '';

                while(!$trans && $i >= 0){
                    $trans_key = !$trans_key ? $trans_arr[$i] : $trans_arr[$i] . '_' . $trans_key;
                    $trans = TransService::cbd($trans_key);
                    $i--;
                }

                if($trans){
                    $html .= '<span style="font-size: 9pt;" class="check-icon">&nbsp;&nbsp;' . file_get_contents(image_path('offer/check-blue.svg')) . ' '  . ($trans) . '&nbsp;</span>' ;
                }
            }
        }
        return $html;
    }

    /**
     * @return string
     */
    public function CO2EfficiencyWidget() : string {
        $key = str_replace('selector_energyEfficiencyClass_', '', $this->car['environmentEmissions']['energyEfficiencyClass']);

        if(!$key || $key === self::SU){
            return '';
        }
        
        $ILevels = [
            'appp' => ['color' => '#1D9453'],
            'app' => ['color' => '#24A728'],
            'ap' => ['color' => '#ACC535'],
            'a' => ['color' => '#FFFB67'],
            'b' => ['color' => '#FECA59'],
            'c' => ['color' => '#FD7D2C'],
            'd' => ['color' => '#FB1520'],
            'e' => ['color' => '#DE111B'],
            'f' => ['color' => '#C60E16'],
            'g' => ['color' => '#AC0A13'],
        ];

        $html = '<table class="co2widget"><tbody class="eff_type">
                    <tr>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td style="width: 12px"></td>
                        <td></td>
                    </tr>';

        $i = 0;
        foreach ($ILevels as $l => $level) {
            $html .= '          
               <tr style="border: 2px solid white" >
                    <td colspan="' . ($i+1) . '" class="Efficiency" style="padding-right: 10px; background-color: ' . $level['color'] . '">        
                        <div style="font-size:7px; background-color: ' . $level['color'] . '; width: ' . ((++$i + 1) * 10 + 15) . 'px">    
                        &nbsp;' . str_replace('p', '+', $l) . '&nbsp;   
                       </div>     
                    </td>
                    <td colspan="' . (10 - $i) . '">          
                    </td>
                    <td>
                        <span class="arrow">
                            ' . ($l == $key ? '<span class="activeClass">' . str_replace('p', '+', $key) . '</span>' : '') . '
                        </span>
                    </td>
              </tr>';
        }
        $html .= '</tbody></table>';
        //dd($html);
        /*<span class="arrow" style="background-color: ' . $level['color'] . '"></span>
                            ' . ($l == $key ? '<span class="activeClass">' . str_replace('p', '+', $key) . '</span>' : '') . '*/
        return $html;

    }

    public function cEnergyEfficiencyClass(){
        return $this->data['cEnergyEfficiencyClass'] && $this->data['cEnergyEfficiencyClass'] !== self::SU ? $this->data['cEnergyEfficiencyClass'] : false;
    }

    public function cTare() : string{
        return $this->data['cTare']['maxWeight'] && $this->data['cTare']['capacityLoad'] ?
            (($this->data['cTare']['maxWeight'] - $this->data['cTare']['capacityLoad']) . ' l')
          : self::NA;

    }

    public function consumptionInner() : string
    {
        $consumptionInner = $this->data['cConsumptionInner'];
        $consumptionUnit = $this->data['cConsumptionUnit'] || 'l';
        $translatedUnit = TransService::cbd('consumption_consumptionUnit_' . $consumptionUnit);
        return $consumptionInner
            ?  str_replace('.', ',', sprintf(TransService::trans('value.consumption'), $consumptionInner, $translatedUnit ))
          : self::NA;
    }

    public function cConsumption() : string
    {
        return str_replace('.', ',', $this->data['cConsumption']);
    }
    public function consumptionOuter() : string
    {
        $consumptionOuter = $this->data['cConsumptionOuter'];
        $consumptionUnit = $this->data['cConsumptionUnit'] || 'l';
        $translatedUnit = TransService::cbd('consumption_consumptionUnit_' . $consumptionUnit);
        return $consumptionOuter
            ?  str_replace('.', ',', sprintf(TransService::trans('value.consumption'), $consumptionOuter, $translatedUnit ))
          : self::NA;
    }

    public function consumptionCombined() : string
    {
        $consumptionCombined = $this->data['cConsumptionCombined'];
        $consumptionUnit = $this->data['cConsumptionUnit'] || 'l';
        $translatedUnit = TransService::cbd('consumption_consumptionUnit_' . $consumptionUnit);
        return $consumptionCombined
            ?  str_replace('.', ',', sprintf(TransService::trans('value.consumption'), $consumptionCombined, $translatedUnit ))
          : self::NA;
    }

    public function emissionSticker() : string {
        $emissionSticker = $this->cEmissionSticker(true);

        $size = 35;
        if ($emissionSticker !== 'selector_emissionSticker_no') {
            $icon = self::EMISSION_STICKERS_ICONS[$emissionSticker];
        }

        return $icon ? '<img src="' . image_path($icon) . '" width="' . $size . '" height="' . $size . '" />' : self::NA;
    }

    public function cManufacturerColorName() : string {
        return ucfirst($this->data['cManufacturerColorName']);
    }

    public function mainImage() : string {
        if(isset($this->car['metaData']['mainImageId']) && $this->car['metaData']['mainImageId']){
            return $this->data['images'][$this->car['metaData']['mainImageId']];
        }elseif(!empty($this->data['images'])){
            return array_shift($this->data['images']);
        }else{
            return $this->data['noImage'];
        }
    }

    public function count_images(){
        return count($this->data['images']);
    }

    public function images(){
        sort($this->data['images']);

        return $this->data['images'];
    }
    /**
     * @return string
     */
    public function getCarNewing(): string
    {
        return 'Neu';
    }

    public function financeDetailWidget(){
        $replacement = [
            'count' => $this->financingDetails->paybackPeriod
        ];

        $html = '<table cellspacing="0" cellpadding="0" class="wide finance">
            <tbody>
            <tr>
                <td class="half">
                    <br>
                    <br>
                    <br>
                    <p>
                        <span class="h1">Finanzierungsdetails</span>
                    </p>
                </td>
                <td class="half" valign="middle" align="right">
                    <br>
                    <br>
                    <br>
                    <p>
                        <span class="context">(alle Angaben inkl. 19 % MwSt.)</span>
                    </p>
                </td>
            </tr>
            <tr><td colspan="2"><p></p></td></tr>';

        foreach ($this->financingDetails::options as $key => $option){
            if(isset($option['delimiter'])){
                $html .= '<tr><td colspan="2" class="divider"></td></tr>
                          <tr><td colspan="2"></td></tr>';
            }
            $html .= '<tr><td colspan="2"></td></tr><tr>
                <td width="100%">
                    <p>
                        <span class="bold">' . TransService::cbd('financing.' . $key, $replacement, true). '</span>
                    </p>
                </td>
                <td  align="right">
                    <p>
                        <span class="bold">'. $this->financingDetails->{$key} . ' ' .  $option['unit'] . '</span>
                    </p>
                </td>
            </tr>';
        }

        $html .= '</tbody></table>';

        return $html;

    }

    public function hightlightStyles(){
        if(count($this->hightlights()) >= 13){
            return 'height: 17pt; padding: 1pt 6pt';
        }elseif (count($this->hightlights()) <= 10){
            return 'height: 23pt; padding: 3pt 6pt';
        }else{
            return 'height: 20pt; padding: 1.5pt 6pt';
        }
    }

    public function uSalutation(){
        return TransService::trans(self::GENDERS[(integer) $this->data['uSalutation']]);
    }

    public function rSalutation(){
        return TransService::trans(self::GENDERS[(integer) $this->data['rSalutation']]);
    }

    public function cCountryVersion(){
        $yes = false;
        $no = false;

        if($this->data['cCountryVersion']){
            if(strtolower($this->data['cCountryVersion']) == 'de'){
                $no = true;
            }else{
                $yes = true;
            }
        }
        return '<span><label for="assurancewas_importedyes"><input style="background-color: #ffffff;font-size: 10pt;" type="radio" value="1" name="assurancewas_imported" ' . ($yes ? 'checked="checked"' : '') . '></label> ja</span>
                <span><label for="assurancewas_importedno"><input style="background-color: #ffffff;font-size: 10pt;" type="radio" value="1" name="assurancewas_imported" ' . ($no ? 'checked="checked"' : '') . '></label> nein</span>';
    }

    public function cTaxi(){
        $yes = false;
        $no = false;

        if($this->data['cTaxi']){
            $yes = true;
        }else{
            $no = true;
        }

        return '<span><label for="assurancevehicle_has_been_used_commerciallyyes"><input style="background-color: #ffffff;font-size: 10pt;" type="radio" value="1" name="assurancevehicle_has_been_used_commercially" ' . ($yes ? 'checked="checked"' : '') . '></label> ja</span>
                <span><label for="assurancevehicle_has_been_used_commerciallyno"><input style="background-color: #ffffff;font-size: 10pt;" type="radio" value="1" name="assurancevehicle_has_been_used_commercially" ' . ($no ? 'checked="checked"' : '') . '></label> nein</span>';
    }

    public function monthlyInstallment(){
        return $this->financingDetails->monthlyInstallment;
    }

    public function oldMonthlyInstallment(){
        return $this->financingDetails->oldMonthlyInstallment;
    }

    public function netPrice(){
        return $this->financingDetails->netLoanAmount;
    }

    public function onetimeSpecialPayment(){
        return $this->financingDetails->onetimeSpecialPayment;
    }

    public function uCompany($original = false){
        return $this->data['uCompany'] ? $this->data['uCompany'] . ($original ? '': ', ') : '';
    }

    public function rCompany($original = false){
        return $this->data['rCompany'] ? $this->data['rCompany'] . ($original ? '': ', ') : '';
    }

    public function getFinance($key) {
        return $this->financingDetails->{$key};
    }

    public function getTerm() {
        return (string) ($this->uTermCond() ?? $this->uTermCondEN());
    }
}