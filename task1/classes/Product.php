<?php

declare(strict_types=1);

class Product
{
    public function __construct(
        public string $title,
        public float $price
    ) {
    }

    public function getInfo(): string
    {
        return "{$this->title} — {$this->price} руб.";
    }
}
