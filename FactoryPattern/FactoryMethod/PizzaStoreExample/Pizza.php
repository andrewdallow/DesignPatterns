<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * LICENSE: Some license information
 *
 * @category   Zend
 * @package    Zend_FactoryMethod
 * @subpackage Pizza
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    1.0
 * @link       http://framework.zend.com/package/PackageName
 * @since      File available since Release 1.0
 */

namespace FactoryMethod;


abstract class Pizza
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $dough;
    /** @var string */
    protected $sauce;
    /** @var array */
    protected $toppings;

    public function prepare(): void
    {
        echo '<p>Preparing ' . $this->name . '</p>';
        echo '<p>Tossing dough...</p>';
        echo '<p>Adding Sauces...</p>';
        echo '<p>Adding Toppings...</p>';
        foreach ($this->toppings as $topping) {
            echo '<p>    ' . $topping . '</p>';
        }
    }

    public function bake(): void
    {
        echo '<p>Baking for 25 minutes at 350F.</p>';
    }

    public function cut(): void
    {
        echo '<p>Cutting the pizza into diagonal slices.</p>';
    }

    public function box(): void
    {
        echo '<p>Place pizza in official PizzaStore Box.</p>';
    }

    public function getName(): string
    {
        return $this->name;
    }

}

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
    }

}

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    public function cut(): void
    {
        echo '<p>Cutting the pizza into square slices.</p>';
    }

}