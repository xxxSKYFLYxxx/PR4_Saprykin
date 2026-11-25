<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $file = __DIR__ . '/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Нельзя создать объект абстрактного класса напрямую ($shape = new Shape(); -> Fatal error: Cannot instantiate abstract class Shape),
// так как абстрактный класс является лишь шаблоном для наследников и содержит абстрактные методы без реализации.

$shapes = [
    new Circle(5),
    new Rectangle(4, 6),
    new Triangle(3, 4, 5),
];

foreach ($shapes as $shape) {
    echo $shape->describe() . PHP_EOL;
}
