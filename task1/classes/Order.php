<?php

declare(strict_types=1);

class Order
{
    /**
     * @param Product[] $products
     */
    public function __construct(
        public User $user,
        public array $products
    ) {
    }

    public function getTotal(): float
    {
        $total = 0.0;
        foreach ($this->products as $product) {
            $total += $product->price;
        }
        return $total;
    }
}
