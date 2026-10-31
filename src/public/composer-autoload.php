<?php

declare(strict_types=1);

// Один файл Composer подключает загрузчик для App\ и библиотек из vendor/.
require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;
use Ramsey\Uuid\UuidFactory;

// Файл класса Transaction Composer найдёт по правилу App\ → app/.
var_dump(new Transaction());

// Библиотека ramsey/uuid тоже загружается через тот же autoload.php.
echo 'UUID: ' . (new UuidFactory())->uuid4()->toString();
