<?php

// $numbers = [1,2,3,4,5,6,7,8,9,10];
// $table_2 = [];
// foreach($numbers as $number){
//     $table_2[] = 2 * $number;
// }
// print_r($table_2);
// $squares = [];
// foreach($numbers as $number){
//     $squares[] = $number * $number;
// }
// print_r($squares);



// function square($number){
//     return $number * $number;
// }
// $numbers = [1,2,3,4,5,6,7,8,9,10];
// $squares = [];
// foreach($numbers as $number){
//     $squares[] = square($number);
// }
// print_r($squares);



// $numbers = [1,2,3,4,5,6,7,8,9,10];
// $squares = array_map(function($number){
//     return $number * $number;
// }, $numbers);
// print_r($squares);



// $numbers = [1,2,3,4,5,6,7,8,9,10];
// $squares = array_map(fn($number)=>
//    $number * $number, $numbers);
// print_r($squares);



$numbers = [1,2,3,4,5,6,7,8,9,10];
$even = array_map(function($number){
    if($number % 2 == 0){
        return $number;
    }
},$numbers);
print_r($even);


