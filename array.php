<?php

$programmingLanguages = ["Python","PHP","Java"]; //defining arrays

var_dump(isset($programmingLanguages[-1])); //checks if an element exist in an array and if the element is not equal to null
var_dump(key_exists(1, $programmingLanguages));//checks if an element exist in an array

echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";

echo count($programmingLanguages); // no of elements in an array

$programmingLanguages[] = "Rust";

array_push($programmingLanguages, "GoLang", "JavaScript","C#"); //adding elements to the end of the array

echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";

echo count($programmingLanguages);

//CUSTOM ARRAY KEYS
unset($programmingLanguages);
$programmingLanguages = ['php' => '8.0', 'python'=>"3.9"];
$programmingLanguages["JavaScript"] = 'ES6';

echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";

echo count($programmingLanguages);