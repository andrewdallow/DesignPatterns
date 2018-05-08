<?php
require_once 'VacationDay.php';

abstract class AbstractBuilder
{
    abstract public function buildDay(string $date): void;

    abstract public function addHotel(string $time, string $name): void;

    abstract public function addReservation(string $time, string $place): void;

    abstract public function addSpecialEvent(string $time, string $event): void;

    abstract public function addTickets(string $time, string $event): void;

    abstract public function getVacationDay(): VacationDay;

}

class VacationBuilder extends AbstractBuilder
{
    /** @var \VacationDay */
    private $_vacation;

    public function buildDay(string $date): void
    {
        $this->_vacation = new VacationDay($date);
    }

    public function addHotel(string $time, string $name): void
    {
        $this->_vacation->addActivity($name, $time);
    }

    public function addReservation(string $time, string $place): void
    {
        $this->_vacation->addActivity($place, $time);
    }

    public function addSpecialEvent(string $time, string $event): void
    {
        $this->_vacation->addActivity($event, $time);
    }

    public function addTickets(string $time, string $event): void
    {
        $this->_vacation->addActivity($event, $time);
    }

    public function getVacationDay(): VacationDay
    {
        return $this->_vacation;
    }
}