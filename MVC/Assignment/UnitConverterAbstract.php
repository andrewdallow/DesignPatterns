<?php

namespace MVC;

/**
 * Abstract model of a Unit converter
 *
 * @category   Zend
 * @package    Zend_MVC
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: 1.0
 * @link       http://framework.zend.com/package/PackageName
 */
abstract class UnitConverterAbstract
{
    protected $_baseValue;
    protected $_rates;

    /**
     * Convert the base value to the given unit
     *
     * @param string $unit
     *
     * @return float
     */
    abstract public function convertToUnit(string $unit): float;

    /**
     * Set the base value with the specified unit.
     *
     * @param float  $amount
     * @param string $unit
     */
    abstract public function setBaseValue(float $amount, string $unit): void;

    /**
     * Get a list of available rates.
     *
     * @return array|null
     */
    public function getRates(): ?array
    {
        return array_keys($this->_rates);
    }
}