<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Examples\Db;
use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

echo '<pre>';

echo 'Объектов до создания: ' . Transaction::getCount() . "\n";

$first = new Transaction();
$first->setStatus(Status::PAID);
$second = new Transaction();

// Статическое свойство общее, а обычное свойство status у объектов разное.
echo 'Объектов после создания: ' . Transaction::getCount() . "\n";
echo 'Первый статус: ' . $first->getStatus() . "\n";
echo 'Второй статус: ' . $second->getStatus() . "\n";

$db1 = Db::getInstance(['host' => 'localhost']);
$db2 = Db::getInstance(['host' => 'other-host']);

echo 'Db::getInstance() вернул тот же объект: ' . ($db1 === $db2 ? 'да' : 'нет') . "\n";
echo 'Адрес из первого вызова: ' . $db2->getConfig()['host'] . "\n";

echo '</pre>';
