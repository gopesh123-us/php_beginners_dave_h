<?php

require 'item.php';

$obj = new App\Item;
var_dump($obj);
$dt = new MySpace\DateTime;
var_dump($dt);

$user = new App\Models\User('Gopesh Sharma', 'gopesh.sharma@gmail.com');
var_dump($user);

$prd = new App\Models\Product;
var_dump($prd);
