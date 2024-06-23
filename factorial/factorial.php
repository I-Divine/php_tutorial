<?php
$number = 10;
function factorial (int $num1, int $num2): int{
    if($num2 <= 1){
        return $num1;
    }
    $new_num = $num1 * ($num2-1);
    $new_num2 = $num2 -1;
    return factorial($new_num, $new_num2);
    
};
echo factorial($number, $number);
?>