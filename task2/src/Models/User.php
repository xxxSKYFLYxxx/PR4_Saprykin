<?php

declare(strict_types=1);

namespace App\Models;

class User
{
    public function __construct(
        public string $name,
        public string $email
    ) {
    }

    public function getInfo(): string
    {
        return "{$this->name} ({$this->email})";
    }
}
