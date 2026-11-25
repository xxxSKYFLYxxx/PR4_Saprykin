<?php

declare(strict_types=1);

class Triangle extends Shape
{
    public function __construct(
        private float $a,
        private float $b,
        private float $c
    ) {
    }

    public function area(): float
    {
        $p = $this->perimeter() / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function perimeter(): float
    {
        return $this->a + $this->b + $this->c;
    }

    protected function getName(): string
    {
        return 'Треугольник';
    }
}
