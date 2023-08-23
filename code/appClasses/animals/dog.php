<?php

namespace AppClasses\Animals;

class dog
{
    protected $canBark = false;

    public function __construct(bool $canBark)
    {
        $this->canBark = $canBark;
    }

    public function __toString()
    {
        return $this->canBark ? "Yes! can bark" : "No! cannot bark";
    }
}
