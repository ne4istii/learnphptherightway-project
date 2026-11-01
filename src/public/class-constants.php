<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

echo '<pre>';

// Доступ к константе через :: не требует создания объекта Status.
echo 'Константа класса: ' . Status::PAID . "\n";

$transaction = new Transaction();
echo 'Начальный статус: ' . $transaction->getStatus() . "\n";

// Передаём готовое значение вместо строки 'paid', которую легко написать с ошибкой.
$transaction->setStatus(Status::PAID);
echo 'После оплаты: ' . $transaction->getStatus() . "\n";

// Массив констант даёт подпись для вывода пользователю.
echo 'Подпись: ' . Status::ALL_STATUSES[$transaction->getStatus()] . "\n";

// ::class возвращает полное имя класса с пространством имён.
echo 'Полное имя класса: ' . Transaction::class . "\n";

echo '</pre>';
