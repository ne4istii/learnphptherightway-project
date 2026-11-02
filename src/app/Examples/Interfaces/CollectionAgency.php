<?php

declare(strict_types=1);

namespace App\Examples\Interfaces;

class CollectionAgency implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        // Агентство возвращает случайную сумму от половины долга до всего долга.
        // При strict_types границы для mt_rand() должны быть целыми числами.
        return mt_rand((int) ceil($owedAmount * 0.5), (int) $owedAmount);
    }
}
