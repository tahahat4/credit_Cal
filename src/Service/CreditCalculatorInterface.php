<?php

namespace App\Service;


interface CreditCalculatorInterface
{
    public function calculateMonthlyPayment(float $capital, int $months, float $annualRate): float;
}