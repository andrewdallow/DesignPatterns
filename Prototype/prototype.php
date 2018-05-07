<?php

namespace Prototype;

/**
 * The abstract Prototype class with the requirement that it can be cloned.
 */
abstract class HumanClone
{
    protected $_name;

    abstract public function __clone();

    abstract public function display(): void;

    abstract public function setName(string $name): void;


}

/**
 * The concrete prototypical class representing a Male Human.
 */
class Male extends HumanClone
{
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    public function display(): void
    {
        echo '<p>My Name is ' . $this->_name . '</p>';
    }

    public function __clone()
    {
    }

}

/**
 * The client which uses a clone of the concrete prototype.
 */
class client
{

    public function clonePerson(HumanClone $person): HumanClone
    {
        return clone $person;
    }

    /**
     * Clones a Human and sets their name. Name of person and clone are then
     * different.
     */
    public function main(): void
    {
        $person = new Male('John Doe');
        $clone = $this->clonePerson($person);
        $clone->setName('Tony Stark');

        $person->display();
        $clone->display();
    }
}