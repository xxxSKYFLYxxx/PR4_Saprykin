<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $file = __DIR__ . '/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

$employees = [
    new Manager('Анна Смирнова', 90000),
    new Manager('Олег Волков', 2000),
    new Developer('Дмитрий Иванов', 120000, 4),
    new Developer('Елена Козлова', 80000, 1),
    new Developer('Максим Соколов', 150000, 6),
];

$totalPayout = 0.0;

foreach ($employees as $employee) {
    echo $employee->getInfo() . PHP_EOL;
    $totalPayout += $employee->getTotalPayout();
}

echo PHP_EOL;
echo sprintf('Общая сумма выплат: %.2f руб.', $totalPayout) . PHP_EOL;
echo 'Всего сотрудников: ' . Employee::getEmployeeCount() . PHP_EOL;
