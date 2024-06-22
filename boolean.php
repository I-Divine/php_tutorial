<?php
// booleans
// integers : 0 or -0 => false
// float : 0.0 or -0.0 => false
// string : "" => false
// string : "0" => false
// null : null => false
// all else evaluates to true

$isComplete = null;
var_dump(is_bool($isComplete));// checks if a variable is a boolean
echo "<br/>";
if($isComplete){
    echo "success";
}else{
    echo "fail";
}