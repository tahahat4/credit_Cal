<?php

namespace App\Service;

class CreditCalculator implements CreditCalculatorInterface
{


    public function calculateMonthlyPayment(float $capital, int $months, float $annualRate): float
    {
        $monthlyRate = $annualRate / 12 / 100;
        $monthlyPayment = ($capital * $monthlyRate) / (1 - pow(1 + $monthlyRate, -$months));

        return round($monthlyPayment, 2);
    }
}