<?php

declare(strict_types=1);

namespace App\Examples\Inheritance;

class ToasterPro extends Toaster
{
    public function __construct()
    {
        // Конструктор родителя сам не вызовется: он создаёт массив slices.
        parent::__construct();
        $this->size = 4;
    }

    public function addSlice(string $slice): void
    {
        // При переопределении обычного метода родительский тоже вызываем явно.
        parent::addSlice($slice);
    }

    public function toastBagel(): void
    {
        foreach ($this->slices as $slice) {
            echo "Toasting {$slice} with bagel option\n";
        }
    }
}
