<?php

namespace AbstractFactory;

require_once 'Pizza.php';
require_once 'PizzaIngredientFactory.php';

/**
 * The Creator Class: Abstract Factory Method representing a Pizza Store
 */
abstract class PizzaStore
{
    /**
     * Create the Pizza Object for a chosen pizza type
     *
     * @param string $type
     *
     * @return \AbstractFactory\Pizza
     */
    abstract public function createPizza(string $type): Pizza;

    /**
     * Order the Pizza.
     *
     * @param string $type
     *
     * @return \AbstractFactory\Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

}

/**
 * The Concrete Creator class of the NY Pizza Store
 */
class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('New York Style Cheese Pizza');
                return $pizza;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('New York Style Veggie Pizza');
                return $pizza;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('New York Style Clam Pizza');
                return $pizza;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName('New York Style Pepperoni Pizza');
                return $pizza;
            default:
                return null;
        }
    }
}

/**
 * The Concrete Creator class of the Chicago Pizza Store
 */
class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('Chicago Style Cheese Pizza');
                return $pizza;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('Chicago Style Veggie Pizza');
                return $pizza;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('Chicago Style Clam Pizza');
                return $pizza;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName('Chicago Style Pepperoni Pizza');
                return $pizza;
            default:
                return null;
        }
    }
}

/**
 * The Concrete Creator class of the California Pizza Store
 */
class CaliforniaPizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese':
                return new CaliforniaStyleCheesePizza();
            case 'veggie':
                return new CaliforniaStyleVeggiePizza();
            case 'clam':
                return new CaliforniaStyleClamPizza();
            case 'pepperoni':
                return new CaliforniaStylePepperoniPizza();
            default:
                return null;
        }
    }
}