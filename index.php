<?php
  declare(strict_types=1);
  //used for strict typing
  //declaring strict type must be the first statement

/**
 * so this is documentaion
 * prints the name of the invoice
 */
$update_name = "Divine";
$name = &$update_name; //this is a pointer
$update_name = "ifechukwu";

//constants
define("STATUS_PAID","paid"); // define at runtime, used in control structures

const SALARY = 50000; //defined at compile time, not used in control structures
echo  "salary: N",SALARY,"\n";
echo "<br/>";

echo "\n",STATUS_PAID;
echo "<br/>";


echo "<p>{$name}'s invoice'</p>";

echo PHP_VERSION; //defined constants
echo "<br/>";

echo __FILE__; //magic constants

// data types


// Scalar types
  # Boolean => True / false , true is printed as 1 and false is printed as an empty space
  # integer => 1,2,3,4,5,6
  # float => 1.2, 2.3, 3.4
  # String => "Divine"
$num = 28;
echo gettype($num); //returns the datatype
echo "<br/>";
echo var_dump($num); //returns details of the variable
// Compound types
  # Arrays
  $myArr = [1,2,3,4,5,5,"hello"];
  print_r($myArr); //used to print arrays

  # Objects
  # calleable
  # iterable

// Special types
  # resource
  # null
  

  function add(int $num1, int $num2){
    echo var_dump($num1);
echo "<br/>";

    echo var_dump($num2);
echo "<br/>";
    
    return $num1 + $num2;
  };

echo "<br/>";
// echo add(2,"3"); this would return fatal error
//because we declared strict types at the beginning of the php code
echo add(2,3); 
