<?php

namespace AbstractFactory;

require_once 'PizzaIngredientFactory.php';

/**
 * The Product: Abstract class representing how to make a pizza.
 */
abstract class Pizza
{
    /** @var string */
    protected $name;
    /** @var Dough */
    protected $dough;
    /** @var Sauce */
    protected $sauce;
    /** @var Veggies[] */
    protected $veggies;
    /** @var Cheese */
    protected $cheese;
    /** @var Pepperoni */
    protected $pepperoni;
    /** @var Clam */
    protected $clam;

    abstract public function prepare(): void;

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

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}

/**
 * Concrete Cheese Pizza
 */
class CheesePizza extends Pizza
{
    private $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo '<p> Preparing ' . $this->name;
        echo '<ul>';
        echo '<li>' . $this->ingredientFactory->createDough() . '</li>';
        echo '<li>' . $this->ingredientFactory->createSauce() . '</li>';
        echo '<li>Veggies: <ul>';
        foreach ($this->ingredientFactory->createVeggies() as $veggie) {
            echo '<li>' . $veggie . '</li>';
        }
        echo '</ul></li>';
        echo '<li>' . $this->ingredientFactory->createCheese() . '</li>';

        echo '</ul>';
    }
}

/**
 * Concrete Clam Pizza
 */
class ClamPizza extends Pizza
{
    private $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo '<p> Preparing ' . $this->name;
        echo '<ul>';
        echo '<li>' . $this->ingredientFactory->createDough() . '</li>';
        echo '<li>' . $this->ingredientFactory->createSauce() . '</li>';
        echo '<li>' . $this->ingredientFactory->createCheese() . '</li>';
        echo '<li>' . $this->ingredientFactory->createClam() . '</li>';
        echo '</ul>';
    }
}
