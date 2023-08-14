<?php
require '../www/functions.php';

$functions = new Functions();

var_dump($functions->sum(2, 3));
echo "<br>";

echo "Sum of first 100 natural numbers";
echo nl2br("\n");
echo ($functions->sumOfFirstNnaturalNumbers(100));
