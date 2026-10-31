<?php

declare(strict_types=1);

use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

// PHP вызовет эту функцию, когда встретит ещё не загруженный класс.
spl_autoload_register(function (string $class): void {
    // Этот загрузчик отвечает только за классы нашего приложения.
    if (!str_starts_with($class, 'App\\')) {
        return;
    }

    // App\PaymentGateway\Paddle\Transaction → app/PaymentGateway/Paddle/Transaction.php.
    $relativePath = substr($class, strlen('App\\'));
    $path = __DIR__ . '/../app/' . str_replace('\\', '/', $relativePath) . '.php';

    if (is_file($path)) {
        require $path;
    }
});

// Здесь нет require_once для каждого класса: файлы найдёт загрузчик выше.
var_dump(new PaddleTransaction(), new StripeTransaction());
