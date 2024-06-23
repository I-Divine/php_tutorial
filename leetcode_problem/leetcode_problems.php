<?php    

// returns an array out of the two numbers in the array $nums 
// that will sum upto the value of $target
function twoSum($nums, $target) {
        for($i = 0; $i < count($nums)  ; $i++){
            for($j = 0; $j < count($nums)  ; $j++){
                
                if(($nums[$i] + $nums[$j]) === $target && $i !== $j){
                    return [$i, $j];
                }else{
                    continue;
                }
            }
        }
    }
echo '<pre>';
print_r (twoSum([0,4,3,0],0));
echo '</pre>';

// checks if a number is a palindrome
// returns a boolean
// function isPalindrome(int $x) {
//     $numText =  (string)$x;
    
//     $n = strlen($numText);
   
//     for($i=0, $j = $n - 1; $i < (int)($n / 2) ; $i++, $j--){
//         echo $i, $j, '<br>';
//         echo $numText[$i], $numText[$j], '<br>';
//         if($numText[$i] != $numText[$j]){
//             return false;
//         }
//     }
//     return true;
// }
// var_dump(isPalindrome(121));

function sortedSquares($nums) {
    $squared_nums = [0,1,9,16,100];
    foreach($nums as $num){
        $squared_nums[] = $num*$num;
    }
    sort($squared_nums);
    return $squared_nums;
}
