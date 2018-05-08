<?php

namespace AbstractFactory;

interface Cheese
{
    public function __toString();

}

class MozzarellaCheese implements Cheese
{
    public function __toString()
    {
        return 'Mozzarella Cheese';
    }
}

class ReggianoCheese implements Cheese
{
    public function __toString()
    {
        return 'Mozzarella Cheese';
    }
}
