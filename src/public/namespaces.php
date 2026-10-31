<?php

declare(strict_types=1);

// require_once загружает файлы; use ниже лишь сокращает имена классов.
require_once __DIR__ . '/../PaymentGateway/Stripe/Transaction.php';
require_once __DIR__ . '/../PaymentGateway/Paddle/Transaction.php';
require_once __DIR__ . '/../PaymentGateway/Paddle/CustomerProfile.php';

// Два класса из одного namespace можно перечислить в фигурных скобках.
use PaymentGateway\Paddle\{Transaction, CustomerProfile};

// as даёт второму Transaction другое короткое имя в этом файле.
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$customerProfile = new CustomerProfile();

// Вывод показывает полные имена классов: одинаковое Transaction не мешает.
var_dump($paddleTransaction, $stripeTransaction, $customerProfile);
