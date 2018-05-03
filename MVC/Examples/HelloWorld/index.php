<?php

namespace MVC\HelloWorld;

include_once 'HelloWorldMVC.php';

$model = new Model();

$controller = new Controller($model);
$view = new View($model);

if (isset($_GET['action'])) {
    $controller->{$_GET['action']}();
}
echo $view->output();