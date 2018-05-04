<?php

namespace ObserverPattern;
require_once 'WeatherDisplayObservers.php';
require_once 'WeatherDataSubject.php';

class WeatherStation
{
    public function main(): void
    {
        $weatherData = new WeatherDataSubject();

        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        $statDisplay = new StatisticsDisplay($weatherData);
        $forcastDisplay = new ForecastDisplay($weatherData);
        $heatIndex = new HeatIndexDisplay($weatherData);

        echo '<h1>Update #1</h1>';
        $weatherData->setMeasurements(25, 65, 1005);
        echo '<h1>Update #2</h1>';
        $weatherData->setMeasurements(26, 70, 1001);
        echo '<h1>Update #3 - removed Heat Index Observer</h1>';
        $weatherData->detachObserver($heatIndex);
        $weatherData->setMeasurements(24, 90, 1001);
    }
}

$weatherStation = new WeatherStation();

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
$weatherStation->main();
?>
</body>
</html>
