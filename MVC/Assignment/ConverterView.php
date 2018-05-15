<?php


namespace MVC;

include_once 'UnitConverterAbstract.php';

/**
 * Represents the View of the Unit converter
 */
class ConverterView
{
    /** @var UnitConverterAbstract  */
    private $_modelConverter;
    private $_unit;

    public function __construct(UnitConverterAbstract $converter, string $unit)
    {
        $this->_modelConverter = $converter;
        $this->_unit = $unit;
    }

    /**
     * Get a single for for the current unit.
     *
     * @return string
     */
    public function outputSingleUnit(): string
    {
        return $this->_getForm($this->_unit);
    }

    /**
     * Output html forms for each unit.
     *
     * @return string
     */
    public function outputAllUnits(): string
    {
        $html = '';
        $units = $this->_modelConverter->getRates();

        foreach ($units as $unit) {
            $html .= $this->_getForm($unit);
        }

        return $html;
    }

    /**
     * HTML template for a form.
     *
     * @param string $unit
     *
     * @return string
     */
    private function _getForm(string $unit): string
    {
        $form = '<form action="?action=convert" method="post">'
            . '<input name="unit" type="hidden" value="' . $unit
            . '"/>'
            . '<label>' . $unit . ':</label>'
            . '<input name="amount" type="text" value="'
            . round($this->_modelConverter->convertToUnit($unit), 4)
            . '"/>'
            . '<input type="submit" value="Convert"/>'
            . '</form>';
        return $form;
    }

}
