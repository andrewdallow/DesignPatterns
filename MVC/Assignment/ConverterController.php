<?php

namespace MVC;
require_once 'UnitConverterAbstract.php';
/**
 * Represents the Controller of the Unit Converter.
 *
 * @category   Zend
 * @package    Zend_MVC
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class ConverterController
{
    /** @var UnitConverterAbstract  */
    private $_modelConverter;

    public function __construct(UnitConverterAbstract $converter)
    {
        $this->_modelConverter = $converter;
    }

    public function convert($request): void
    {
        if (isset($request['unit'], $request['amount'])) {
            $this->_modelConverter->setBaseValue(
                $request['amount'], $request['unit']
            );
        }
    }


}