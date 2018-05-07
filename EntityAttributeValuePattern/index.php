<?php
require_once 'EAV.php';

$addressAttribute = new Attribute('Address');
$addressValue = new Value($addressAttribute, '123 Main St.');

$dobAttribute = new Attribute('DOB');
$dobValue = new Value($dobAttribute, '01/18/2000');

$personEntity = new Entity('John Doe', [$addressValue, $dobValue]);

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
echo $personEntity;
?>
</body>
</html>
