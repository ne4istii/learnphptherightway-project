<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Examples\Inheritance\FancyOven;
use App\Examples\Inheritance\Toaster;
use App\Examples\Inheritance\ToasterPro;

// Параметр Toaster принимает и обычный тостер, и его потомка ToasterPro.
function toastBread(Toaster $toaster): void
{
    $toaster->toast();
}

echo '<pre>';

$toaster = new Toaster();
foreach (['bread 1', 'bread 2', 'bread 3'] as $slice) {
    $toaster->addSlice($slice);
}
echo "Toaster (максимум 2):\n";
toastBread($toaster);

$pro = new ToasterPro();
foreach (['bread 1', 'bread 2', 'bread 3', 'bread 4', 'bread 5'] as $slice) {
    $pro->addSlice($slice);
}
echo "\nToasterPro (максимум 4):\n";
toastBread($pro);
echo "\nРежим bagel:\n";
$pro->toastBagel();

$oven = new FancyOven($pro);
echo "\nДуховка использует свой тостер:\n";
$oven->toast();
$oven->fry();

echo '</pre>';
