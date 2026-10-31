<?php

declare(strict_types=1);

// Подключаем классы, которые используются в примере.
require_once __DIR__ . '/../PaymentProfile.php';
require_once __DIR__ . '/../Customer.php';
require_once __DIR__ . '/../Transaction.php';

// Третий аргумент не передан: у этой операции нет клиента.
$withoutCustomer = new Transaction(5, 'Без клиента');

// ?-> возвращает null и останавливает цепочку, если слева null.
// ?? подставляет понятный текст вместо этого null.
echo $withoutCustomer->getCustomer()?->getPaymentProfile()?->id ?? 'Профиль не найден';
echo '<br />';

// Теперь каждый объект в цепочке существует, поэтому получаем id профиля.
$withCustomer = new Transaction(5, 'С клиентом', new Customer(new PaymentProfile(42)));
echo $withCustomer->getCustomer()?->getPaymentProfile()?->id;
echo '<br />';
