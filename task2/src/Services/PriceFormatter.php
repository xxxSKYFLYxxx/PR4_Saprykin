<?php

declare(strict_types=1);

namespace App\Services;

class PriceFormatter
{
    public static function format(float $price): string
    {
        return number_format($price, 2, '.', ' ') . ' руб.';
    }
}
