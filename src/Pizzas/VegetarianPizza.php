<?php

namespace PizzaStoreLibrary\Pizzas;

use PizzaStoreLibrary\Pizza;

class VegetarianPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Вегетарианская';
        $this->sauce = 'чесночный';
        $this->toppings = ['моцарелла', 'перец', 'грибы', 'оливки', 'лук'];
    }
}