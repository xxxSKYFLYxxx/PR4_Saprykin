<?php

declare(strict_types=1);

class Developer extends Employee
{
    public function __construct(
        string $name,
        float $salary,
        private int $experienceYears
    ) {
        parent::__construct($name, $salary);
    }

    public function calculateBonus(): float
    {
        $bonus = ($this->salary * 0.15) + ($this->experienceYears * 1000);
        return max((float) self::MIN_BONUS, $bonus);
    }
}
