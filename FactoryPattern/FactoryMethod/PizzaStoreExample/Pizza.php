<?php
namespace FactoryMethod;
/**
 * The Product: Abstract class representing how to make a pizza.
 */
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

/**
 * Concrete Product representing a NY Style Cheese Pizza.
 */
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

/**
 * Concrete Product representing a Chicago Style Cheese Pizza
 */
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