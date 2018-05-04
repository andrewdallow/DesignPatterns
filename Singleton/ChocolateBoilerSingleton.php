<?php

namespace Singleton;
/**
 * Singleton representing a Chocolate Boiler.
 *
 * Suppose we have a Chocolate boiler in a chocolate factory. The job of the
 * boiler is to take in the chocolate and milk, bring it to a boil, and then pass
 * them on to the next phase.
 */
class ChocolateBoilerSingleton
{
    /** @var \Singleton\ChocolateBoilerSingleton */
    private static $_chocolateBoiler;
    /** @var bool */
    private $_isEmpty;
    /** @var bool */
    private $_isBoiled;

    private function __construct()
    {
        $this->_isEmpty = true;
        $this->_isBoiled = false;
    }

    public static function getInstance(): ChocolateBoilerSingleton
    {
        if (self::$_chocolateBoiler === null) {
            self::$_chocolateBoiler = new ChocolateBoilerSingleton();
        }
        return self::$_chocolateBoiler;
    }

    public function fill(): void
    {
        // fill the boiler with milk/chocolate mixture
    }

    public function drain(): void
    {
        // drain the boiled milk and chocolate.
    }

    public function boil(): void
    {
        // bring the contents to a boil
    }

    public function isEmpty(): bool
    {
        return $this->_isEmpty;
    }

    public function isBoiled(): bool
    {
        return $this->_isBoiled;
    }


}