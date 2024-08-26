<?php

// require autoload
require_once __DIR__ . '/../vendor/autoload.php';

// import class
use App\Models\Task2;

// strings
$string1 = "{{lajkdhf{adfa}{}adfasdfadf{}}}";
$string2 = "{{lajkdhf{adfa";

$obj1 = new Task2($string1);
$obj2 = new Task2($string2);

echo $string1 . " - " . $obj1->check();
echo "\n";
echo $string2 . " - " . $obj2->check();