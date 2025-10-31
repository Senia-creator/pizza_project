<?php

namespace PizzaStoreLibrary\Pizzas;

use PizzaStoreLibrary\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони';
        $this->sauce = 'томатный';
        $this->toppings = ['моцарелла', 'пепперони', 'орегано'];
    }
}