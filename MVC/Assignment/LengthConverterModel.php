<?php
namespace MVC;

require_once 'UnitConverterAbstract.php';
/**
 * Class representing Length Conversions Model
 *
 * @category   Zend
 * @package    Zend_MVC
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: 1.0
 * @link       http://framework.zend.com/package/PackageName
 */
class LengthConverterModel extends UnitConverterAbstract
{

    public function __construct()
    {
        $this->_rates
            = [
            'Metre'      => 1,
            'Centimetre' => 10,
            'Kilometre'  => 0.001,
            'Miles'      => 0.000621371,
            'Inch'       => 39.3701,
            'Foot'       => 3.28084,
            'Yard'       => 1.09361
        ];
    }

    public function convertToUnit(string $unit): float
    {
        if (isset($this->_rates[$unit])) {
            return $this->_baseValue * $this->_rates[$unit];
        }
        return 0;
    }

    public function setBaseValue(float $amount, string $unit): void
    {
        if (isset($this->_rates[$unit])) {
            $this->_baseValue = $amount * (1 / $this->_rates[$unit]);
        }
    }
}