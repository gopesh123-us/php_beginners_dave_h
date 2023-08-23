<?php

namespace AppClasses\Animals;

class Tiger
{
    protected $isHumgry = false;

    public function __construct(bool $isHungry)
    {
        $this->isHumgry = $isHungry;
    }

    public function __toString()
    {
        return $this->isHumgry ? "Tiger is hungry" : "Tiger is not hungry";
    }
}
