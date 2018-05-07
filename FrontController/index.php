<?php

namespace FrontController;

require_once 'FrontController.php';
require_once 'Home.php';
require_once 'Student.php';
require_once 'Error.php';

$frontController = new FrontController();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$frontController->run();
?>
</body>
</html>