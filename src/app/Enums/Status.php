<?php

declare(strict_types=1);

namespace App\Enums;

// Пока это обычный класс: в PHP 8.0 ещё нет встроенного enum.
class Status
{
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';

    // Ключ — значение для кода, значение массива — понятная подпись.
    public const ALL_STATUSES = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined',
    ];
}
