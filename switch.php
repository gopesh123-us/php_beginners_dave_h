<?php
require 'functions.php';

$functions = new Functions();

var_dump($functions->sum(2, 3));
echo "<br>";
$random = rand(5, 100);
echo nl2br($random . "\n\r");

switch ($random) {
    case ($random < 10): {
            echo 'less than 10';
            break;
        }
    case 10: {
            echo 'exact 10';
            break;
        }
    case ($random <= 30): {
            echo 'less than or equals 30';
            break;
        }
    case ($random <= 50): {
            echo 'less than or equals 50;';
            break;
        }
    case ($random <= 70): {
            echo 'less than or equals 70';
            break;
        }
    case ($random <= 100): {
            echo 'less than or equals 100';
            break;
        }
    default: {
            echo 'none';
            break;
        }
}

echo nl2br("\n\n\t\r");

$array = [];

for ($i = 1; $i <= 10; $i++) {

    switch ($i) {
        case ($i < 4): {
                $array[$i] = "a";
                break;
            }
        case ($i >= 4 && $i <= 7): {
                $array[$i] = "b";
                break;
            }
        case ($i >= 8): {
                $array[$i] = "c";
                break;
            }
    }
}

var_dump($array);
