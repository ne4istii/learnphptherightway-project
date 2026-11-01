<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Examples\Encapsulation\Transaction;

echo '<pre>';

$transaction = new Transaction(25);
echo $transaction->process() . "\n";

// Для другой суммы создаём другой объект, а не меняем private-свойство напрямую.
$another = new Transaction(125);
echo $another->process() . "\n";

// Только демонстрация из урока: Reflection обходит обычное ограничение private.
$property = new ReflectionProperty(Transaction::class, 'amount');
echo 'Reflection читает сумму: ' . $property->getValue($transaction) . "\n";
$property->setValue($transaction, 125);
echo 'После Reflection: ' . $transaction->process() . "\n";

echo '</pre>';
