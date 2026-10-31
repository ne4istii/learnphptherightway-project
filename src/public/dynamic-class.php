<?php

declare(strict_types=1);

require_once __DIR__ . '/../Transaction.php';

// Имя класса можно хранить в строковой переменной.
$class = 'Transaction';
// addTax() и applyDiscount() возвращают объект, поэтому вызовы идут цепочкой.
$amount = (new $class(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount);
