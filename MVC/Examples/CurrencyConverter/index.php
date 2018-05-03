<?php

namespace MVC\CurrencyConverter;
include_once 'CurrencyConverterMVC.php';

$currencyConverter = new Model();
$currencyConverter->setBaseValue(1, 'GBP');

$controller = new Controller($currencyConverter);

if (isset($_GET['action'])) {
    $controller->{$_GET['action']}($_POST);
}

$gbpView = new View($currencyConverter, 'GBP');
echo $gbpView->output();

$usdView = new View($currencyConverter, 'USD');
echo $usdView->output();

$eurView = new View($currencyConverter, 'EUR');
echo $eurView->output();

$yenView = new View($currencyConverter, 'YEN');
echo $yenView->output();
