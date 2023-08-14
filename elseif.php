<?php
require '../www/functions.php';

$functions = new Functions();
$first = rand(1, 10);
$second = rand(10, 30);
var_dump('sum of ' . $first . ' and ' . $second . ' is ' . $functions->sum($first, $second));
echo "<br>";
echo "Using Rand function\n\r";

$random = rand(1, 100);
echo nl2br($random . "\n\r");

if ($random <= 10) {
    echo $random . ' is less than or equal to 10';
} elseif ($random > 10 && $random <= 50) {
    echo $random . ' is greater than 10 or less than or equal to 50';
} else {
    echo $random . ' is greater than 50 or less than or equal to 100';
}
