<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Enums\Native\Status;

$status = Status::Paid;

echo '<pre>';
echo 'Имя варианта: ' . $status->name . "\n";
echo 'Значение для кода: ' . $status->value . "\n";
echo 'Подпись: ' . $status->label() . "\n";

// Из строки получаем готовый вариант enum; для неизвестной строки будет null.
echo 'Из строки paid: ' . Status::from('paid')->name . "\n";
echo 'Неизвестный статус: ' . (Status::tryFrom('unknown') === null ? 'null' : 'найден') . "\n";
echo '</pre>';
