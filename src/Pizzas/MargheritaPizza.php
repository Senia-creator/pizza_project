<?php

namespace PizzaStoreLibrary\Pizzas;

use PizzaStoreLibrary\Pizza;

class MargheritaPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Маргарита';
        $this->sauce = 'томатный';
        $this->toppings = ['моцарелла', 'помидоры', 'базилик'];
    }
}