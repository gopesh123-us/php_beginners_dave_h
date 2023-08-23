<?php

class climb
{
    protected  $canClimb = false;
    public function __construct(bool $canClimb)
    {
        $this->canClimb = $canClimb;
    }

    public function __toString()
    {
        return $this->canClimb ? "Yes! can climb" : "No cannot climb";
    }
}
