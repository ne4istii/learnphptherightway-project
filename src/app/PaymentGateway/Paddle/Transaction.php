<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

// Имя Transaction совпадает со Stripe, но пространство имён другое.
class Transaction
{
    // Одно значение на весь класс, а не отдельное значение у каждого объекта.
    private static int $count = 0;

    // Новая операция сначала ожидает оплаты.
    private string $status = Status::PENDING;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount(): int
    {
        // В статическом методе нет $this: он вызывается без конкретного объекта.
        return self::$count;
    }

    public function setStatus(string $status): self
    {
        // Константа помогает не опечататься при вызове; проверка не пустит чужой статус.
        if (!array_key_exists($status, Status::ALL_STATUSES)) {
            throw new \InvalidArgumentException('Неизвестный статус: ' . $status);
        }

        $this->status = $status;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
