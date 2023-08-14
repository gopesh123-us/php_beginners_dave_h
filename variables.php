<?php
echo '<strong>Variables in PHP</strong>';

$count = 5.5;
$size = 20;
echo "<br> Operators! <br>";

var_dump($count + 5);
echo "<br>";
var_dump($count * $size);

echo "<br> String Operators! <br>";
$fname = "Gopesh";
$lname = "Sharma";
var_dump($fname . " " . $lname);

echo "<br> Type conversion! <br>";
$price = "150";
$quantity = 3.5;
$total_price = $price * $quantity;
var_dump($total_price);

echo "<br> Boolean values<br>";
$bool_a = true;
$bool_b = false;

echo "<br> AND operator<br>";
var_dump($bool_b and $bool_b);

echo "<br> AND table <br>";
var_dump(true && true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<br> OR operator<br>";
var_dump($bool_a or $bool_b);
echo "<br> OR table <br>";
var_dump(true || true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);
echo "<br> NOT operator<br>";
var_dump($bool_a, !$bool_a);

echo "<br> Single and Double quotes<br>";
$start = "3 o' clock";
$end = '4 o\' clock';
echo $start, ' :: ', $end;

echo "<br> Escape Charaters <br>";
$days = "\r\nMonday\r\nTuesday\r\nWednesday";
echo "Days => see in the next line" . nl2br($days);
$name = "Gopesh Sharma";
echo nl2br("\r\n");
echo nl2br("\r\n");
echo nl2br("\r\n");
echo "My name is {$name}";
$answer = "true";
echo nl2br("\r\n");
var_dump($answer);
