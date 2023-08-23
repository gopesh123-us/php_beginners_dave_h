<?php

// include_once 'appClasses/actions/climb.php';
// include_once 'appClasses/actions/run.php';

spl_autoload_register(function ($classname) {
    include_once 'appClasses/actions/' . $classname . '.php';
});

$climb = new climb(true);

$run = new run(true);

print $climb;
print "</br>";
print $run;
