<?php

declare(strict_types=1);

namespace App\Examples\Interfaces;

class Rocky implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        // Rocky всегда возвращает клиенту 65% долга.
        return $owedAmount * 0.65;
    }
}
