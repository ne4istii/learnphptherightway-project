<?php

declare(strict_types=1);

namespace App\Examples;

// Учебный пример из урока: это не настоящее подключение к базе данных.
class Db
{
    private static ?self $instance = null;

    private function __construct(private array $config)
    {
    }

    public static function getInstance(array $config): self
    {
        // Второй вызов вернёт тот же объект; новая конфигурация уже не применяется.
        if (self::$instance === null) {
            self::$instance = new self($config);
        }

        return self::$instance;
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
