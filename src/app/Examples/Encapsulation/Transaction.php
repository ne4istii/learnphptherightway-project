<?php

declare(strict_types=1);

namespace App\Examples\Encapsulation;

class Transaction
{
    // Сумму задаём при создании. Снаружи нельзя незаметно её переписать.
    public function __construct(private int $amount)
    {
    }

    public function process(): string
    {
        // Пользователь класса вызывает process(), не зная деталей форматирования.
        return 'Processing ' . $this->formatAmount() . ' transaction';
    }

    public function hasSameAmountAs(self $other): bool
    {
        // Код этого класса может читать private-свойство другого Transaction.
        return $this->amount === $other->amount;
    }

    private function formatAmount(): string
    {
        return '$' . $this->amount;
    }
}
