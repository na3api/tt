<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 3/15/19
 * Time: 12:33 PM
 */

namespace App\Services;


class FinanceService
{
    const hundredPercent = 100;
    const monthCount = 12;
    const VAT = 19;
    const periodInterestRate = [
        12 =>  0.6,
        24 =>  0.6,
        36 =>  0.5,
        48 =>  0.4,
        60 =>  0.33,
        72 =>  0.25,
        84 =>  0.2,
        96 =>  0.15
    ];

    const financingConstants = [
        'closingCosts' => 0,
        'nominalInterestRate' => 3.919,
        'insuranceTariff' => 1100
    ];

    const options = [
        'monthlyInstallment' => ['unit' => ' €', 'type' => ReplacementData::MONEY],
        'onetimeSpecialPayment' => ['unit' => ' €' , 'type' => ReplacementData::MONEY],
        'currentSalesPrice' => ['unit' => ' €' , 'type' => ReplacementData::MONEY],
        'netLoanAmount' => ['unit' => ' €', 'delimiter' => true , 'type' => ReplacementData::MONEY],
        'paymentProtectionInsurance' => ['unit' => ' €' , 'type' => ReplacementData::MONEY],
        'paybackPeriod' => ['unit' => ' Monate', 'numbersAfterDot' => '0', 'type' => ReplacementData::NUMBER],
        'finalInstallment' => ['unit' => ' €' , 'type' => ReplacementData::MONEY],
        'grossLoanAmount' => ['unit' => ' €', 'delimiter' => true , 'type' => ReplacementData::MONEY],
        'grossLoanAmountWithoutFinalInstallment' => ['value' => 'calculatedFinancing.grossLoanAmountWithoutFinalInstallment', 'unit' => ' €' , 'type' => ReplacementData::MONEY],
        'nominalInterestRate' => ['unit' => ' %', 'delimiter' => true , 'type' => ReplacementData::NUMBER],
        'annualPercentageRate' => ['unit' => ' %', 'type' => ReplacementData::NUMBER]
    ];

    public $monthlyInstallment = 0.00;
    public $onetimeSpecialPayment = 0.00;
    public $currentSalesPrice = 0.00;
    public $netLoanAmount = 0.00;
    public $paymentProtectionInsurance = 0.00;
    public $paybackPeriod = 0;
    public $finalInstallment = 0.00;
    public $grossLoanAmount = 0.00;
    public $grossLoanAmountWithoutFinalInstallment = 0.00;
    public $nominalInterestRate = 0.00;
    public $annualPercentageRate = 0.00;
    public $oldMonthlyInstallment = 0;

    public $net;
    public $difference;

    /**
     * FinanceService constructor.
     * @param $data ReplacementData
     */
    public function __construct(ReplacementData $data)
    {
        $this->monthlyInstallment = money($data->qMonthlyInstallment());
        $this->onetimeSpecialPayment = money($data->qOnetimeSpecialPayment());
        $this->currentSalesPrice = $data->cCurrentSalesPrice(true);
        $this->netLoanAmount = money($data->qNetLoanAmount());
        $this->paymentProtectionInsurance = money($data->qPaymentProtectionInsurance());
        $this->paybackPeriod = (integer) $data->qPaybackPeriod();
        $this->finalInstallment = money($data->qFinalInstallment());
        $this->grossLoanAmount = money($data->qGrossLoanAmount());
        $this->grossLoanAmountWithoutFinalInstallment = money($data->qGrossLoanAmountWithoutFinalInstallment());
        $this->nominalInterestRate = money($data->qNominalInterestRate());
        $this->annualPercentageRate = money($data->qAnnualPercentageRate());

        if($data->cWasPrice()){
            $this->purchasePrice = $data->purchasePrice() ?? 0;
            $this->firstInstallment = $data->firstInstallment() ?? 0.2 * $this->currentSalesPrice;

            $this->setMonthlyInstallment($data->cWasPrice());
        }

        if($data->cVatRate() == self::VAT){
            $this->setNetPrice($data->cVatRate());
        }

        $this->currentSalesPrice = money($this->currentSalesPrice);
    }

    /**
     * @param $vatRate
     */
    private function setNetPrice($vatRate) : void{
        $this->net = round($this->currentSalesPrice / (float) ('1.' . $vatRate), 2);
        $this->difference = money(round($this->currentSalesPrice - $this->net, 2));
        $this->net = money($this->net);
    }

    /**
     * @param $price
     * @return array
     */
    private function getCalculatedInputs ($price) : array {
        return [
            round($this->purchasePrice * $price / 100) * 100,
            round($this->firstInstallment / $this->currentSalesPrice * $price / 100) * 100,
            $this->paybackPeriod
        ];
    }

    /**
     * @param $price float
     * @return void
     */
    private function setMonthlyInstallment($price) : void {
        list($purchasePrice, $firstInstallment, $paybackPeriod ) = $this->getCalculatedInputs($price);

        /** @var float $netLoanAmount */
        $netLoanAmount = $price - $purchasePrice - $firstInstallment + self::financingConstants['closingCosts'];

        /** @var float $finalInstallment */
        $finalInstallment = self::periodInterestRate[$this->paybackPeriod] * $price;

        /** @var float $monthlyInstallment */
        $monthlyInstallment = -$this->pmt(self::financingConstants['nominalInterestRate'] / self::hundredPercent / self::monthCount, $paybackPeriod, $netLoanAmount, -$finalInstallment, 0);

        $this->oldMonthlyInstallment = money(round($monthlyInstallment));
    }

    /**
     * @return void
     */
    private function countDatails() : void{
        $this->finalInstallment = self::periodInterestRate[$this->paybackPeriod] * $this->currentSalesPrice;
        $this->netLoanAmount = $this->currentSalesPrice - $this->purchasePrice - $this->firstInstallment + self::financingConstants['closingCosts'];
        $this->monthlyInstallment = -$this->pmt(self::financingConstants['nominalInterestRate'] / self::hundredPercent / self::monthCount, $this->paybackPeriod, $this->netLoanAmount, -$this->finalInstallment, 0);

        //$totalInterestPayments = ($this->>$this->monthlyInstallment * $this->$this->paybackPeriod) - $netLoanAmount + $finalInstallment;
        $this->grossLoanAmount = $this->monthlyInstallment * $this->paybackPeriod + $this->finalInstallment;
        $this->onetimeSpecialPayment = $this->purchasePrice + $this->firstInstallment;
        $this->grossLoanAmountWithoutFinalInstallment = $this->grossLoanAmount - $this->finalInstallment;
        $this->annualPercentageRate = $this->effect(
                ($this->rate(
                        $this->paybackPeriod,
                        (-$this->monthlyInstallment - (self::financingConstants['closingCosts'] / $this->paybackPeriod)),
                        ($this->currentSalesPrice - $this->purchasePrice - $this->finalInstallment),
                        -$this->finalInstallment,
                        0,
                        self::financingConstants['nominalInterestRate'] / self::hundredPercent)
                    * self::monthCount * self::hundredPercent) / self::hundredPercent, self::monthCount
            ) * self::hundredPercent;
    }

    /**
     * @param $rate
     * @param $periods
     * @param $present
     * @param int $future
     * @param int $type
     * @return int
     */
    private function pmt($rate, $periods, $present, $future = 0, $type = 0){
        if ($rate === 0) {
            $result = ($present + $future) / $periods;
        } else {
            $term = pow(1 + $rate, $periods);
            if ($type === 1) {
                $result =  ($future * $rate / ($term - 1) + $present * $rate / (1 - 1 / $term)) / (1 + $rate);
            } else {
                $result = $future * $rate / ($term - 1) + $present * $rate / (1 - 1 / $term);
            }
        }
        return -$result;
    }

    /**
     * @param $rate
     * @param $periods
     * @return float|int|null
     */
    private function effect($rate, $periods){
        // Return error if rate <=0 or periods < 1
        if ($rate <= 0 || $periods < 1) return null;

        // Truncate periods if it is not an integer
        $periodsInt = floor($periods);

        // Return effective annual interest rate
        return pow(1 + $rate / $periodsInt, $periodsInt) - 1;
    }

    /**
     * @param $periods
     * @param $payment
     * @param $present
     * @param int $future
     * @param int $type
     * @param float $guess
     * @return float
     */
    private function rate($periods, $payment, $present, $future = 0, $type = 0, $guess = 0.01): float
    {
        // Set maximum epsilon for end of iteration
        $epsMax = 1e-6;

        // Set maximum number of iterations
        $iterMax = 100;
        $iter = 0;
        $close = false;
        $rate = $guess;

        while ($iter < $iterMax && !$close) {
            $t1 = pow($rate + 1, $periods);
            $t2 = pow($rate + 1, $periods - 1);

            $f1 = $future + $t1 * $present + $payment * ($t1 - 1) * ($rate * $type + 1) / $rate;
            $f2 = $periods * $t2 * $present - $payment * ($t1 - 1) * ($rate * $type + 1) / pow($rate, 2);
            $f3 = $periods * $payment * $t2 * ($rate * $type + 1) / $rate + $payment * ($t1 - 1) * $type / $rate;

            $newRate = $rate - $f1 / ($f2 + $f3);

            if (abs($newRate - $rate) < $epsMax) $close = true;

            $iter += 1;
            $rate = $newRate;
        }

        if (!$close) return $rate;

        return $rate;
    }
}