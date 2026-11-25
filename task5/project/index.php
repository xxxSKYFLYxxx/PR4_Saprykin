<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/src/';

    if (str_starts_with($class, $prefix)) {
        $relative = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});

use App\Book;
use App\Electronics;
use App\Product;

$catalog = [
    new Book('Чистый код', 1000.0),
    new Book('Совершенный код', 1500.0),
    new Book('Паттерны объектно-ориентированного проектирования', 1800.0),
    new Electronics('Смартфон', 40000.0, 10.0),
    new Electronics('Наушники беспроводные', 8000.0, 5.0),
];

$totalCatalogPrice = 0.0;

foreach ($catalog as $product) {
    echo $product->getInfo() . PHP_EOL;
    $totalCatalogPrice += $product->getFinalPrice();
}

echo PHP_EOL;
echo sprintf('Сумма конечных цен по каталогу: %.2f руб.', $totalCatalogPrice) . PHP_EOL;
echo 'Общее число созданных товаров: ' . Product::getCount() . PHP_EOL;
