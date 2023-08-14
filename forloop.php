<?php
require '../www/functions.php';

$functions = new Functions();

var_dump($functions->sum(2, 3));
echo "<br>";

for ($i = 0; $i <= 10; $i++) {
    echo $i . ',';
}
