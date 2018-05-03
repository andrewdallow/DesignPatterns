<?php

namespace MVC\CurrencyConverter;
/**
 * Model of Currency converter holding the logic for converting between
 * currencies.
 */
class Model
{
    private $_baseValue = 0;

    private $_rates
        = [
            'GBP' => 1.0,
            'USD' => 0.6,
            'EUR' => 0.83,
            'YEN' => 0.0058
        ];

    public function convertToCurrency(string $currency): float
    {
        if (isset($this->_rates[$currency])) {
            $rate = 1 / $this->_rates[$currency];
            return round($this->_baseValue * $rate, 2);
        }
        return 0;
    }

    public function setBaseValue(float $amount, string $currency): void
    {
        if (isset($this->_rates[$currency])) {
            $this->_baseValue = $amount * $this->_rates[$currency];
        }
    }

}

/**
 * Controls what is seen in the view
 */
class View
{
    private $_currency;
    private $_model;

    public function __construct(Model $model, string $currency)
    {
        $this->_model = $model;
        $this->_currency = $currency;
    }

    public function output(): string
    {
        $html = '<form action="?action=convert" method="post">'
            . '<input name="currency" type="hidden" value="' . $this->_currency
            . '"/>'
            . '<label>' . $this->_currency . ':</label>'
            . '<input name="amount" type="text" value="'
            . $this->_model->convertToCurrency($this->_currency) . '"/>'
            . '<input type="submit" value="Convert"/>'
            . '</form>';
        return $html;
    }

}

/**
 * Controls the user input.
 */
class Controller
{
    private $_model;

    public function __construct(Model $model)
    {
        $this->_model = $model;
    }

    public function convert($request): void
    {
        if (isset($request['currency'], $request['amount'])) {
            $this->_model->setBaseValue(
                $request['amount'], $request['currency']
            );
        }
    }

}