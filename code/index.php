<?php

namespace Index;

use \AppClasses\Actions\climb as Climb;
use \AppClasses\Actions\run as Run;
use \AppClasses\Animals\dog as Dog;
use \AppClasses\Humans\Pets\dog as PetDog;
use \test as Test;


include_once 'includes/autoload.php';

$climb = new Climb(true);

$run = new Run(true);

$dog = new Dog(false);

$test = new Test();

$petDog = new PetDog(true);

$tiger = new \AppClasses\Animals\Tiger(true);

print $climb;
print "</br>";
print $run;
print "</br>";
print $dog;
print "</br>";
print $test;
print "</br>";
print $petDog;
print "<br>";
print $tiger;
