<?php

namespace AbstractFactory;

interface Sauce
{
    public function __toString();
}

class MarinaraSauce implements Sauce
{
    public function __toString()
    {
        return 'Marinara Sauce';
    }
}

class PlumTomatoSauce implements Sauce
{
    public function __toString()
    {
        return 'Plum Tomato Sauce';
    }
}