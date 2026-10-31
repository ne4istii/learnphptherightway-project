<?php

declare(strict_types=1);

class Transaction
{
    // private: эти свойства можно менять только через методы класса.
    private float $amount;
    private string $description;

    // Конструктор вызывается при создании объекта через new Transaction(...).
    public function __construct(
        float $amount,
        string $description
    )
    {
        $this->amount = $amount;
        $this->description = $description;
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
