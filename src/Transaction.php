<?php

declare(strict_types=1);

class Transaction
{
    // private в параметрах сразу создаёт свойства и сохраняет в них переданные значения.
    public function __construct(
        private float $amount,
        private string $description,
        private ?Customer $customer = null
    ) {
    }

    public function getCustomer(): ?Customer
    {
        // null означает, что клиент к этой операции пока не привязан.
        return $this->customer;
    }

    public function addTax(float $rate): Transaction
    {
        // $this — текущий объект. Увеличиваем его сумму на $rate процентов.
        $this->amount += $this->amount * $rate / 100;

        // Возвращаем тот же объект, чтобы можно было продолжить цепочку вызовов.
        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        // Скидка считается от текущей суммы, уже с добавленным налогом.
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(): float
    {
        // Снаружи нельзя читать private-свойство напрямую, поэтому есть метод.
        return $this->amount;
    }

    // Деструктор вызывается при уничтожении объекта, например в конце запроса.
    public function __destruct()
    {
        echo 'Destruct ' . $this->description . '<br />';
    }
}
