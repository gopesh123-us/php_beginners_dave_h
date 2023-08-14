<?php

#calling a function
require '../www/functions.php';

$functions = new Functions();

var_dump("Sum is: " . $functions->sum(12, 3));
echo "<br>";
var_dump("Sum of first 10 natural numbers: " . $functions->sumOfFirstNnaturalNumbers(10));
echo "<br>";
echo "<br>";
echo "control structures!!";
echo "foreach";

echo "<br>";

#foreach loop
$myArray = array("A", "B", "C", "D");
foreach ($myArray as $value) {
    echo "<br>";
    echo $value;
}

echo "<br>";

#foreach loop
$myItems = [1 => "Football", 2 => "Vollyball", 3 => "Baseball", 4 => "Cricketball"];
foreach ($myItems as $index => $item) {
    echo "<br>";
    echo $index, ': ', $item;
}

echo "<br>";

#if control structures
echo "<br>If statement</br>";
$a = 110;
$b = 220;
if ($a < $b) {
    echo $a, ',', $b, '<br>';
    echo "a is less than b";
} else {
    echo $a, ',', $b, '<br>';
    echo "a is more than b";
}
echo ("<br> Changing values of a to 40 and b to <br>");

$a = 40;
$b = 30;
echo ($a < $b ? "a is less than b" : "a is more than b");


echo "<br>";
echo "<br>";

#empty function - return true or false based on if the variable is empty
$emptyArray = [];
var_dump(empty($myItems));
var_dump(empty($emptyArray));

#empty function with if condition
if (empty($myItems)) {
    echo "<br>" . "Array is empty";
} else {
    echo "<br>" . "My Items array is not empty";
}
if (empty($emptyArray)) {
    echo "<br>" . "This array is empty";
} else {
    echo "<br>" . "This array is not empty";
}
echo "<br>";
echo "<br>";
echo (empty($emptyArray) ? 'Empty' : 'Filled');
echo "<br>";
echo (empty($myItems) ? 'Empty' : 'Filled');
