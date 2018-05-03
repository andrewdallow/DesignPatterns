<?php

namespace FactoryMethod;
include_once 'PizzaStoreFactoryMethod.php';

class PizzaTestDrive
{
    public static function main()
    {
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        echo '<h1>NY Pizza</h1>';
        $pizza = $nyStore->orderPizza('cheese');
        echo 'Ethan ordered a ' . $pizza->getName();

        echo '<h1>Chicago Pizza</h1>';
        $pizza = $chicagoStore->orderPizza('cheese');
        echo 'Joel ordered a ' . $pizza->getName();

    }
}

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
<?php PizzaTestDrive::main(); ?>
</body>
</html>
