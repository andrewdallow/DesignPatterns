<?php
namespace FactoryMethod;

require_once 'Pizza.php';

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
     * @return \FactoryMethod\Pizza
     */
    abstract public function createPizza(string $type): Pizza;

    /**
     * Order the Pizza.
     *
     * @param string $type
     *
     * @return \FactoryMethod\Pizza
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
        switch ($type) {
            case 'cheese':
                return new NYStyleCheesePizza();
            case 'veggie':
                return new NYStyleVeggiePizza();
            case 'clam':
                return new NYStyleClamPizza();
            case 'pepperoni':
                return new NYStylePepperoniPizza();
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
        switch ($type) {
            case 'cheese':
                return new ChicagoStyleCheesePizza();
            case 'veggie':
                return new ChicagoStyleVeggiePizza();
            case 'clam':
                return new ChicagoStyleClamPizza();
            case 'pepperoni':
                return new ChicagoStylePepperoniPizza();
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