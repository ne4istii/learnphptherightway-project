<?php

declare(strict_types=1);

namespace App\Examples\AbstractFields;

interface Renderable
{
    // Любой реализующий класс должен вернуть готовую строку HTML.
    public function render(): string;
}
