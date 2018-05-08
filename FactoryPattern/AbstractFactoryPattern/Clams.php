<?php

namespace AbstractFactory;

interface Clams
{
    public function __toString();
}

class FreshClams implements Clams
{
    public function __toString()
    {
        return 'Fresh Clams';
    }
}

class FrozenClams implements Clams
{
    public function __toString()
    {
        return 'Fresh Clams';
    }
}
