<?php 
// php support callback functions and closures
$foo = function(int $a , int $b) : int{
return $a + $b;
}; // this is an anonymous function

echo $foo(1,2);

$myArr = [1,2,3,4,5,6,7,8,9,0];

$newArr = array_map(function($element){
    return $element + 2;
},$myArr); // using callbaack function

echo "<br/>";

echo "<pre>";
print_r($newArr);
echo "</pre>";

$newArr = array_map(fn($element)=> $element*$element  ,$myArr); //arrow function

echo "<pre>";
print_r($newArr);
echo "</pre>";

?>