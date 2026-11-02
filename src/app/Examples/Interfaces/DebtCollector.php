<?php

declare(strict_types=1);

namespace App\Examples\Interfaces;

interface DebtCollector
{
    // Здесь только обещание метода; каждый сборщик напишет его сам.
    public function collect(float $owedAmount): float;
}
