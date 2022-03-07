<?php 
# comparison operators
# conditional operators
$number1 = '8.5';
$number2 = 8.5;
$number3 = 5;
var_dump( !( ($number1 <= $number3 || $number2 >= $number1) && ( $number1 <= $number3 && $number2 !== $number1)));
#logical operators
// AND &&

//  0 0  0 
//  0 1  0
//  1 0  0
//  1 1  1

//  // OR ||
//  0 0  0
//  0 1  1
//  1 0  1
//  1 1  1
// // NOT !

// 0   1
// 1   0