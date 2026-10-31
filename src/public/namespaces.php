<?php

declare(strict_types=1);

// require_once загружает файлы; use ниже лишь сокращает имена классов.
require_once __DIR__ . '/../app/PaymentGateway/Stripe/Transaction.php';
require_once __DIR__ . '/../app/PaymentGateway/Paddle/Transaction.php';
require_once __DIR__ . '/../app/PaymentGateway/Paddle/CustomerProfile.php';

// Два класса из одного namespace можно перечислить в фигурных скобках.
use App\PaymentGateway\Paddle\{Transaction, CustomerProfile};

// as даёт второму Transaction другое короткое имя в этом файле.
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$customerProfile = new CustomerProfile();

// Вывод показывает полные имена классов: одинаковое Transaction не мешает.
var_dump($paddleTransaction, $stripeTransaction, $customerProfile);
