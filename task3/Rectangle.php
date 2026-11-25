<?php

declare(strict_types=1);

class Rectangle extends Shape
{
    public function __construct(
        private float $width,
        private float $height
    ) {
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }

    public function perimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }

    protected function getName(): string
    {
        return 'Прямоугольник';
    }
}
