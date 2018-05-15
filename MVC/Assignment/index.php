<?php
/**
 * Represents a Unit Converter in the Model-View-Controller Pattern
 *
 * This unit converter can be used to convert between any type of units.
 * For example, from metric to imperial units as already implemented here.
 * It is not limited to just Length conversion, but any converter which
 * can extend the UnitConverterAbstract class.
 *
 * The Converter is designed around the Model-View-Controller Pattern where:
 *      Model: UnitConverterAbstract, LengthConverterModel
 *      View: ConverterView
 *      Controller: ConverterController
 *
 * @category   Zend
 * @package    Zend_MVC
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: 1.0
 * @link       http://framework.zend.com/package/PackageName
 */
namespace MVC;

require_once 'ConverterView.php';
require_once 'LengthConverterModel.php';
require_once 'ConverterController.php';

// Initialise Model
$unitsLength = new LengthConverterModel();
$unitsLength->setBaseValue(1, 'Metre');

//Initialise Controller with model
$controllerLength = new ConverterController($unitsLength);

// Controller changes model if button pressed
if (isset($_GET['action'])) {
    $controllerLength->{$_GET['action']}($_POST);
}
// View updated with current model
$viewLength = new ConverterView($unitsLength, 'Metre');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unit Converter</title>
</head>
<body>
<h1>Length Converter</h1>
<?php echo $viewLength->outputAllUnits(); ?>
</body>
</html>
