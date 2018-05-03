<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * LICENSE: Some license information
 *
 * @category   Zend
 * @package    Zend_PizzaStore
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    1.0
 * @link       http://framework.zend.com/package/PackageName
 * @since      File available since Release 1.0
 */

namespace FactoryMethod;

require_once 'Pizza.php';

abstract class PizzaStore
{
    abstract public function createPizza(string $type): Pizza;

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