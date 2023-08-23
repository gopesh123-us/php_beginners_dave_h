<?php

namespace AppClasses\Humans\Pets;

class dog
{
    protected $loveHumans = false;

    public function __construct(bool $loveHumans)
    {
        $this->loveHumans = $loveHumans;
    }

    public function __toString()
    {
        return $this->loveHumans ? "Loves Humans" : "Dislikes Humans";
    }
}
