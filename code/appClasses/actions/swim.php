<?php

namespace AppClasses\Actions;

class swim
{
    protected $canSwim = false;

    public function __construct(bool $canSwim)
    {
        $this->canSwim = $canSwim;
    }

    public function __toString()
    {
        return $this->canSwim ? "Yes! can swim" : "No! cannot swim";
    }
}
