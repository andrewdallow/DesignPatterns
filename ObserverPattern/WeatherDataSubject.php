<?php

namespace ObserverPattern;

require_once 'ObserverInterfaces.php';

/**
 * Class representing the weather data.
 *
 * Weather Data is the subject in the Observer pattern which allows Observers
 * to register/unregister and be notified of a change to the data.
 *
 */
class WeatherDataSubject implements Subject
{
    /**
     * Array of observers watching tje weather data.
     *
     * @var array
     */
    private $_observers = [];
    /** @var float */
    private $_temperature;
    /** @var float */
    private $_humidity;
    /** @var float */
    private $_pressure;

    /**
     * Attach an observer to the weather data subject
     *
     * @param \ObserverPattern\Observer $observer
     */
    public function attachObserver(Observer $observer): void
    {
        $hashKey = spl_object_hash($observer);
        $this->_observers[$hashKey] = $observer;
    }

    /**
     * Detach the observer from the weather data subject.
     *
     * @param \ObserverPattern\Observer $observer
     */
    public function detachObserver(Observer $observer): void
    {
        $hashKey = spl_object_hash($observer);
        unset($this->_observers[$hashKey]);

    }

    /**
     * Notify the observers of a change.
     */
    public function notifyObservers(): void
    {
        foreach ($this->_observers as $observer) {
            $observer->update(
                $this->_temperature, $this->_humidity, $this->_pressure
            );
        }
    }

    /**
     * Get the current temperature.
     *
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->_temperature;
    }

    /**
     * Get the current humidity.
     *
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->_temperature;
    }

    /**
     * Get the current pressure.
     *
     * @return float
     */
    public function getPressure(): float
    {
        return $this->_temperature;
    }

    /**
     * Set the current weather variables.
     *
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements(float $temperature, float $humidity,
        float $pressure
    ): void {

        $this->_temperature = $temperature;
        $this->_humidity = $humidity;
        $this->_pressure = $pressure;
        $this->measurementsChanged();

    }

    /**
     * Update observers when we receive new dat from the weather station.
     */
    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }
}