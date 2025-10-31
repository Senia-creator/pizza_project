<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PizzaStoreLibrary\PizzaStore;
use PizzaStoreLibrary\Pizza;
use PizzaStoreLibrary\Pizzas\MargheritaPizza;
use PizzaStoreLibrary\Pizzas\PepperoniPizza;
use PizzaStoreLibrary\Pizzas\VegetarianPizza;

class MyPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match($type) {
            'margherita' => new MargheritaPizza(),
            'pepperoni' => new PepperoniPizza(),
            'vegetarian' => new VegetarianPizza(),
            default => throw new InvalidArgumentException("Неизвестный тип пиццы: $type")
        };
    }
}