<?php 
$person = "female"; // male
$salary = 1100;

#app => salary > 1000 => rich , salary <= 1000 => poor  
// o/p female , rich 

// if($person == 'female'){
//     // female
//     if($salary > 1000){
//         echo "female , rich";
//     }else{
//         echo "female , poor";
//     }
// }else{
//     // male
//     if($salary >1000){
//         echo "male , rich";
//     }else{
//         echo "male , poor";
//     }
// }

# use logical operators , one echo
// if($person == 'female' && $salary > 1000 ){
//     $message = "female , rich";
// }elseif($person == 'male' && $salary > 1000){
//     $message = "male , rich";
// }elseif($person == 'female' && $salary <= 1000){
//     $message = "female , poor";
// }else{
//     $message = "male , poor";
// }

// echo $message;

# nested if with one echo
// if($person == 'female'){
//     // female
//     $message = "female";
//     if($salary > 1000){
//         $message .= " , rich";
//     }else{
//         $message .= " , poor";
//     }
// }else{
//     // male
//     $message = "male";
//     if($salary > 1000){
//         $message .= " , rich";
//     }else{
//         $message .= " , poor";
//     }
// }

// echo $message;


# 2 if,else , one echo 

// if($person == 'female'){
//     // female
//     $message = "female";
    
// }else{
//     // male
//     $message = "male";
    
// }


// if($salary > 1000){
//     $message .= " , rich";
// }else{
//     $message .= " , poor";
// }

// echo $message;

#one if , without logical operators , one echo
// $salaryMessage = "rich";
// if($salary < 1000){
//     $salaryMessage = "poor";
// }
// echo "$person , $salaryMessage";

# 1 ternary operator, without logical operators , one echo 

echo $person . (( $salary > 1000 ) ? " ,rich" : ' , poor');