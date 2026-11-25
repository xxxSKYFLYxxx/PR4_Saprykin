<?php

declare(strict_types=1);

namespace App;

class Electronics extends Product
{
    public function __construct(
        string $title,
        float $price,
        private float $warrantyPercent
    ) {
        parent::__construct($title, $price);
    }

    public function getFinalPrice(): float
    {
        return $this->price * (1 + self::TAX + $this->warrantyPercent / 100);
    }
}
