<?php 
# arithmetic operators (+,-,*,/,%,**)
$number1 = 10;
$number2 = 4;

$sum = $number1 + $number2;
$sub = $number1 - $number2;
$mul = $number1 * $number2;
$div = $number1 / $number2;
$mod = $number1 % $number2;
$pow = $number1 ** $number2; //10^4;

#dec/inc operators
echo $sum    . '<br>'; // 14
echo $sum++  .'<br>'; // 14 // post inc
echo ++$sum  . '<br>'; //16 // pre inc
echo $sum    . '<br>'; // 16
echo $sum--  .'<br>'; // 16  // post dec
echo --$sum  . '<br>'; // 14 // pre dec
echo $sum; // 14
# assignment operators
// $name = 'ahmed';
// $sum = $sum + $sub;
// $sum += $sub;
// $sum = $sum * $number1;
// $sum *= $number1;
// echo $sum;

// $name = 'esraa';

// $name .= ' ahmed';
// echo $name;


// $tag = '<h1>';
// $tag .= 'Ahmed';
// $tag .= '</h1>';
// echo $tag;
