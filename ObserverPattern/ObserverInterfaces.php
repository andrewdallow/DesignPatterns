<?php

namespace ObserverPattern;
/**
 * Interface Observer - implemented by anyone who wishes to observe the Subject
 * and be notified of its changes.
 */
interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure
    ): void;

}

/**
 * Interface Subject - Implemented by the Subject that wishes to be Observed
 * and hence notify its observers of any changes.
 */
interface Subject
{
    public function attachObserver(Observer $observer): void;

    public function detachObserver(Observer $observer): void;

    public function notifyObservers(): void;

}