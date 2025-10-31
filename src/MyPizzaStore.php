<?php

namespace PizzaStoreProject;

use PizzaStoreLibrary\PizzaStore;
use PizzaStoreLibrary\Pizza;
use PizzaStoreProject\Pizzas\MargheritaPizza;
use PizzaStoreProject\Pizzas\PepperoniPizza;
use PizzaStoreProject\Pizzas\VegetarianPizza;

class MyPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match($type) {
            'margherita' => new MargheritaPizza(),
            'pepperoni' => new PepperoniPizza(),
            'vegetarian' => new VegetarianPizza(),
            default => throw new \InvalidArgumentException("Неизвестный тип пиццы: $type")
        };
    }
}