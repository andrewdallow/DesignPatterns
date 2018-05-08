<?php

namespace AbstractFactory;

interface Veggies
{
    public function __toString();
}

class Garlic implements Veggies
{
    public function __toString()
    {
        return 'Garlic';
    }
}

class Onion implements Veggies
{
    public function __toString()
    {
        return 'Onion';
    }
}

class Mushroom implements Veggies
{
    public function __toString()
    {
        return 'Mushroom';
    }
}

class RedPepper implements Veggies
{
    public function __toString()
    {
        return 'Red Pepper';
    }
}

class EggPlant implements Veggies
{
    public function __toString()
    {
        return 'Egg Plant';
    }
}

class Spinach implements Veggies
{
    public function __toString()
    {
        return 'Spinach';
    }
}

class BlackOlives implements Veggies
{
    public function __toString()
    {
        return 'Black Olives';
    }
}
