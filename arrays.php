<?php
$my_array = [];
$my_array["name"] = "Gopesh Sharma";
$my_array["age"] = "54";
var_dump($my_array);

echo nl2br("\r\n");
echo nl2br("\r\n");
echo "Name from Array first element: " . $my_array["name"];
echo nl2br("\r\n");
echo "Age from Array second element: " . $my_array["age"];

echo nl2br("\r\n");
echo nl2br("\r\n");

echo "<br>Articles</br>";
$articles = ["TV", "Radio", "Phone"];
var_dump($articles);
echo nl2br("\r\n");
var_dump($articles[0]);
echo nl2br("\r\n");
var_dump($articles[0], $articles[1], $articles[2]);
echo "<br>";
$good_books = array("book1" => "Flow", "book2" => "Yoga Therapy", "book3" => "Authentic Happiness");
var_dump($good_books);
echo "<br>";
$my_reads = array("Exploring Philosophy", "Java Cookbook", "Mastering AWS");
var_dump($my_reads);

$sports = ["cricket", "baseball", "football"];
$water_sports = array("water polo", "swimming", "water ball");
echo "<br>Sports<br>";
var_dump($sports);
echo "<br>Water Sports<br>";
var_dump($water_sports);
$opposites = array("good" => "bad", "up" => "down", "high" => "low");
echo "<br>Pair of Opposites<br>";
var_dump($opposites);
$pairs = ["man" => "women", "boy" => "girl", "child" => "adult"];
echo "<br>Pairs<br>";
var_dump($pairs);
echo "<br>";
foreach ($pairs as $pair => $value) {
    echo $pair, ' ', $value, ' ', "<br>";
}

$my_manual_array = [1 => "VCU", 3 => "UVA", "John Hopkins", 6 => "NYU"];
$my_manual_array_two = [
    "one" => "VCU",
    "six" => "UVA",
    "John Hopkins",
    "nine" => "NYU"
];
var_dump($my_manual_array);

echo "<br>";
var_dump($my_manual_array["3"]);
echo nl2br("\r\n" . "again" . "\r\n");
var_dump($my_manual_array[3]);
echo nl2br("\r\n");

var_dump($my_manual_array_two);
echo nl2br("\r\n");
echo nl2br("\r\n");
echo "<br> <strong>multi-dimensional array</strong><br>";
$array_one = [
    "controller" => "home",
    "action" => "show_home"
];
$array_two = [
    "controller" => "posts",
    "action" => "show_posts"
];
$array_three = [
    "controller" => "post",
    "action" => "show_single_posts"
];
$routes = [
    "/home" => $array_one,
    "/posts" => $array_two,
    "/post" => $array_three
];

var_dump($routes);
foreach ($routes as $route => $value) {
    echo 'url: ' . $route . "\n\t<br>";
    foreach ($value as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}

$special_forces = ["natural force", "gravitational force", "supernatural force"];
foreach ($special_forces as $force) {
    echo $force . ', ';
}
