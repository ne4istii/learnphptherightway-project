<?php

declare(strict_types=1);

namespace App\Examples\Inheritance;

class Toaster
{
    protected array $slices;
    protected int $size;

    public function __construct()
    {
        $this->slices = [];
        $this->size = 2;
    }

    public function addSlice(string $slice): void
    {
        // В уроке лишний кусочек просто не добавляется; исключения разберут позже.
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast(): void
    {
        foreach ($this->slices as $slice) {
            echo "Toasting {$slice}\n";
        }
    }
}
