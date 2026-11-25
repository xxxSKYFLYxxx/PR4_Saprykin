<?php

declare(strict_types=1);

namespace App;

abstract class Product
{
    public const TAX = 0.2;

    private static int $count = 0;

    public function __construct(
        public readonly string $title,
        protected float $price
    ) {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }

    abstract public function getFinalPrice(): float;

    public function getInfo(): string
    {
        return sprintf(
            '%s — базовая цена: %.2f руб., конечная цена: %.2f руб.',
            $this->title,
            $this->price,
            $this->getFinalPrice()
        );
    }
}
