<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$user = new User('Иван', 'ivan@example.com');
$product1 = new Product('Ноутбук', 65000.0);
$product2 = new Product('Мышь беспроводная', 1500.5);

$order = new Order($user, [$product1, $product2]);

echo 'Пользователь: ' . $order->user->getInfo() . PHP_EOL;
echo 'Товары в заказе:' . PHP_EOL;
foreach ($order->products as $item) {
    echo '- ' . $item->getInfo() . PHP_EOL;
}
echo 'Итоговая сумма заказа: ' . $order->getTotal() . ' руб.' . PHP_EOL;
