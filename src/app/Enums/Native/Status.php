<?php

declare(strict_types=1);

namespace App\Enums\Native;

// Отдельный пример: в уроке 40 Status был обычным классом для PHP 8.0.
enum Status: string
{
    case Paid = 'paid';
    case Pending = 'pending';
    case Declined = 'declined';

    public function label(): string
    {
        return match ($this) {
            self::Paid => 'Paid',
            self::Pending => 'Pending',
            self::Declined => 'Declined',
        };
    }
}
