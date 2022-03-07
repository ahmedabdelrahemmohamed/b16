<?php 

// switch ($variable) {
//     case 'value':
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// }

$color = 'yellow';

// switch ($color) {
//     case 'black':
//         echo "i like this color $color <br>";
//         break;
//     case 'blue':
//         echo "i like this color $color <br>";
//         break;
//     case 'red':
//         echo "i don't like this color $color <br>";
//         break;
//     case 'yellow':
//         echo "i don't like this color $color <br>";
//         break;
//     default:
//         echo "i don't even know this color $color <br>";
// }


switch ($color) {
    case 'black':
    case 'blue':
        echo "i like this color $color <br>";
        break;
    case 'red':
    case 'yellow':
        echo "i don't like this color $color <br>";
        break;
    default:
        echo "i don't even know this color $color <br>";
}

// if($color == 'black' || $color == 'blue'){
//     echo "i like this color $color <br>";
// }


$studentGrade = 520;
define('MAXGRADE',100);

if($studentGrade < 0 || $studentGrade > MAXGRADE){
    $message = "Please Enter Valid Grade";
}elseif($studentGrade < (MAXGRADE/2)){
    $message = "Falied";
}else{
    $message = "successed";
}

// echo $message;

switch($studentGrade){
    case $studentGrade >= 0 && $studentGrade < (MAXGRADE/2):
        echo "Falied";break;
    case $studentGrade >= (MAXGRADE/2) && $studentGrade <= MAXGRADE:
        echo "success";break;
    default:
        echo "Please Enter A Vaild Grade";
}