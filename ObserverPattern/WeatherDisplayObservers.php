<?php


namespace ObserverPattern;

include_once 'ObserverInterfaces.php';
include_once 'WeatherDataSubject.php';

interface Displayable
{
    public function display(): void;

}

class CurrentConditionsDisplay implements Displayable, Observer
{
    private $_temperature;
    private $_humidity;
    private $_weatherData;

    public function __construct(WeatherDataSubject $weatherData)
    {
        $this->_weatherData = $weatherData;
        $weatherData->attachObserver($this);
    }

    public function display(): void
    {
        echo '<p>Current Conditions: ' . $this->_temperature . 'C degrees and '
            . $this->_humidity . '% humidity';
    }

    public function update(float $temperature, float $humidity, float $pressure
    ): void {
        $this->_temperature = $temperature;
        $this->_humidity = $humidity;
        $this->display();
    }
}

class StatisticsDisplay implements Displayable, Observer
{
    private $_maxTemp = 0;
    private $_minTemp = 200;
    private $_tempSum = 0;
    private $_numReadings;
    private $_weatherData;

    public function __construct(WeatherDataSubject $weatherData)
    {
        $this->_weatherData = $weatherData;
        $weatherData->attachObserver($this);
    }

    public function display(): void
    {
        $avg = $this->_tempSum / $this->_numReadings;

        echo '<p>Avg/Max/Min temperature = '
            . $avg . '/'
            . $this->_maxTemp . '/'
            . $this->_minTemp . '</p>';
    }

    public function update(float $temperature, float $humidity, float $pressure
    ): void {
        $this->setStatistics($temperature);
        $this->display();
    }

    private function setStatistics($temperature): void
    {
        $this->_tempSum += $temperature;
        $this->_numReadings++;

        if ($temperature > $this->_maxTemp) {
            $this->_maxTemp = $temperature;
        }

        if ($temperature < $this->_minTemp) {
            $this->_minTemp = $temperature;
        }

    }
}

class ForecastDisplay implements Displayable, Observer
{
    private $_currentPressure;
    private $_lastPressure;
    private $_weatherData;

    public function __construct(WeatherDataSubject $weatherData)
    {
        $this->_weatherData = $weatherData;
        $weatherData->attachObserver($this);
    }

    public function display(): void
    {
        $text = '<p>';
        if ($this->_currentPressure > $this->_lastPressure) {
            $text .= 'Improving weather on the way!';
        } elseif ($this->_currentPressure === $this->_lastPressure) {
            $text .= 'More of the same';
        } elseif ($this->_currentPressure < $this->_lastPressure) {
            $text .= 'Watch out for cooler, rainy weather';
        }
        $text .= '</p>';

        echo $text;
    }

    public function update(float $temperature, float $humidity, float $pressure
    ): void {
        $this->_lastPressure = $this->_currentPressure;
        $this->_currentPressure = $pressure;
        $this->display();
    }
}

class HeatIndexDisplay implements Displayable, Observer
{
    private $_heatIndex = 0;
    private $_weatherData;

    public function __construct(WeatherDataSubject $weatherData)
    {
        $this->_weatherData = $weatherData;
        $weatherData->attachObserver($this);
    }

    public function display(): void
    {
        echo '<p>Heat index is: ' . round($this->_heatIndex, 2) . '</p>';
    }

    public function update(float $temperature, float $humidity, float $pressure
    ): void {
        $this->_heatIndex = $this->_computeHeatIndex($temperature, $humidity);
        $this->display();
    }

    private function _computeHeatIndex(float $temp, float $hum)
    {
        $index = (16.923 + (0.185212 * $temp) + (5.37941 * $hum) - (0.100254
                    * $temp * $hum)
                + (0.00941695 * ($temp * $temp)) + (0.00728898 * ($hum * $hum))
                + (0.000345372 * ($temp * $temp * $hum)) - (0.000814971 * ($temp
                        * $hum
                        * $hum)) +
                (0.0000102102 * ($temp * $temp * $hum * $hum)) - (0.000038646
                    * ($temp * $temp * $temp))
                + (0.0000291583 *
                    ($hum * $hum * $hum)) + (0.00000142721 * ($temp * $temp
                        * $temp * $hum)) +
                (0.000000197483 * ($temp * $hum * $hum * $hum))
                - (0.0000000218429 * ($temp
                        * $temp * $temp * $hum * $hum)) +
                0.000000000843296 * ($temp * $temp * $hum * $hum * $hum)) -
            (0.0000000000481975 * ($temp * $temp * $temp * $hum * $hum * $hum));

        return $index;
    }
}