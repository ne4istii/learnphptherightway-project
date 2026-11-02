<?php

declare(strict_types=1);

namespace App\Examples\Inheritance;

class FancyOven
{
    // Духовка содержит тостер: это композиция, а не наследование.
    public function __construct(private ToasterPro $toaster)
    {
    }

    public function toast(): void
    {
        $this->toaster->toast();
    }

    public function toastBagel(): void
    {
        $this->toaster->toastBagel();
    }

    public function fry(): void
    {
        echo "Frying in the oven\n";
    }
}
