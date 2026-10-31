<?php

declare(strict_types=1);

// Подключаем файл с описанием класса Transaction.
require_once __DIR__ . '/../Transaction.php';

// new создаёт объект; -> вызывает его методы один за другим.
$transaction1 = (new Transaction(300, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$transaction2 = (new Transaction(500, 'Transaction 2'))
    ->addTax(8)
    ->applyDiscount(15);

// Показываем итоговую сумму каждой операции.
var_dump($transaction1->getAmount(), $transaction2->getAmount());
