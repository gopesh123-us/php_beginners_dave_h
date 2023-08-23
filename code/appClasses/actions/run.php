<?php

namespace AppClasses\Actions;

class run
{
    protected $canRun = false;

    public function __construct(bool $canRun)
    {
        $this->canRun = $canRun;
    }

    public function __toString()
    {
        return $this->canRun ? 'Yes! can run' : 'No cannot run';
    }
}
