<?php

declare(strict_types=1);

class Circle extends Shape
{
    public function __construct(
        private float $radius
    ) {
    }

    public function area(): float
    {
        return pi() * ($this->radius ** 2);
    }

    public function perimeter(): float
    {
        return 2 * pi() * $this->radius;
    }

    protected function getName(): string
    {
        return 'Круг';
    }
}
