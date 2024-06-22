<?php
$unsorted_arr = [1,3,5,6,7,2,9,4,0,8];

echo '<pre>';
print_r( $unsorted_arr );
echo '</pre>';

for( $j=0; $j < count ($unsorted_arr) ; $j++ ){
    for( $i = 0, $temp; $i < count ( $unsorted_arr ) -1 ; $i++ ){
        if( $unsorted_arr[ $i ] > $unsorted_arr[ $i+1] ){

            $temp = $unsorted_arr[ $i + 1 ];
            $unsorted_arr[ $i + 1 ] = $unsorted_arr[ $i ];
            $unsorted_arr[ $i ] = $temp;
        
    }
}}
$sorted_arr = $unsorted_arr;
echo '<br><pre> Sorted';
print_r( $sorted_arr );
echo '</pre>';
