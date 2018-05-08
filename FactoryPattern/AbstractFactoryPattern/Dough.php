<?php

namespace AbstractFactory;

interface Dough
{
    public function __toString();
}

class ThinCrustDough implements Dough
{
    public function __toString()
    {
        return 'Thin Crust Dough';
    }
}

class ThickCrustDough implements Dough
{
    public function __toString()
    {
        return 'Thick Crust Dough';
    }
}