<?php

require_once __DIR__ . '/vendor/autoload.php';

use PizzaStoreProject\MyPizzaStore;

$pizzaStore = new MyPizzaStore();

echo "Заказ пиццы Маргарита:" . PHP_EOL;
$pizza1 = $pizzaStore->orderPizza('margherita');

echo PHP_EOL . "Заказ пиццы Пепперони:" . PHP_EOL;
$pizza2 = $pizzaStore->orderPizza('pepperoni');

echo PHP_EOL . "Заказ вегетарианской пиццы:" . PHP_EOL;
$pizza3 = $pizzaStore->orderPizza('vegetarian');