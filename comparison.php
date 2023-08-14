<?php
$a = 150;
$b = "150";
echo "Value of a is " . $a;
echo "<br>";
echo "Type of a is " . gettype($a);

echo "<br>";
echo "Value of b is " . $b;
echo "<br>";
echo "Type of b is " . gettype($b);
#comparing with ==
echo nl2br("\n\rComparing $a and $b with ==\n\r");
if ($a == $b) {
    echo "both are equal";
} else {
    echo "both are not equal";
}
#comparing with ===
echo nl2br("\n\rComparing $a and $b again with ===\n\r");
if ($a === $b) {
    echo 'Both have same value, but not type';
} else {
    echo 'Both are not identical. They have same value, but the type is not same';
}

#nl2br function demo
echo nl2br("\n\r");
echo nl2br("\n\r");
echo "If you view the page source \r\n you will find a newline in this string.";
echo "<br>";
echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");

#other comparisons <> is not equal
$c = 100;
$d = 200;
if ($c <> $d) {
    echo nl2br("\n\r");
    echo nl2br("both are not equal");
} else {
    echo nl2br("\n\r");
    echo nl2br("both are equal");
}
