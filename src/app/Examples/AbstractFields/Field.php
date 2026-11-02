<?php

declare(strict_types=1);

namespace App\Examples\AbstractFields;

abstract class Field implements Renderable
{
    public function __construct(protected string $name)
    {
    }
}
