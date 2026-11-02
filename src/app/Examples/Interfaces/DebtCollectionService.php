<?php

declare(strict_types=1);

namespace App\Examples\Interfaces;

class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector): void
    {
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo "Collected {$collectedAmount} out of {$owedAmount}" . PHP_EOL;
    }
}
