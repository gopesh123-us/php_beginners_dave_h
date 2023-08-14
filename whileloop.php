<?php
echo "While loop Demo\n";
$a = readline("Enter your name: " . "\t");
echo $a;

$i = 0;
while ($i < 10) {
    echo $i . " ";
    $i++;
}
echo "\n";
// Input section
// get users name
$name = (string) readline("Your name again: ");

$int = (int)readline('Enter an integer: ');

$float = (float)readline('Enter a floating'
    . ' point number: ');

// Entered integer is 10 and
// entered float is 9.78
echo "Hello " . $name . " The integer value you entered is "
    . $int
    . " and the float value is " . $float;
