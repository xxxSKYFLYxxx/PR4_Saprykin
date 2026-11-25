<?php

declare(strict_types=1);

abstract class Employee
{
    public const MIN_BONUS = 500;

    private static int $employeeCount = 0;

    public function __construct(
        protected string $name,
        protected float $salary
    ) {
        self::$employeeCount++;
    }

    abstract public function calculateBonus(): float;

    public function getInfo(): string
    {
        $bonus = $this->calculateBonus();
        return sprintf(
            '%s: оклад = %.2f руб., премия = %.2f руб.',
            $this->name,
            $this->salary,
            $bonus
        );
    }

    public function getTotalPayout(): float
    {
        return $this->salary + $this->calculateBonus();
    }

    public static function getEmployeeCount(): int
    {
        return self::$employeeCount;
    }
}
