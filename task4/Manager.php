<?php

declare(strict_types=1);

class Manager extends Employee
{
    public function calculateBonus(): float
    {
        $bonus = $this->salary * 0.20;
        return max((float) self::MIN_BONUS, $bonus);
    }
}
