<?php 
#app
// temp <= 0     => Snow Weather
// temp >= 30    => Hot Weather
// temp > 1      => Cold Weather 
// temp >= 15    => Warm Weather

$temp = -3000000;

if($temp <= 0){
    $message = "Snow Weather";
}elseif($temp > 0  && $temp < 15){
    $message = "Cold Weather";
}elseif($temp >= 15 && $temp < 30){
    $message = "Warm Weather";
}else{
    $message = "Hot Weather";
}



// if($temp >= 30){
//     $message = "Hot Weather";
// }elseif($temp < 30 && $temp >= 15){
//     $message  = "Warm Weather";
// }elseif($temp > 0  && $temp < 15){
//     $message = "Cold Weather";
// }else{
//     $message = "Snow Weather";
// }

// echo $message;

// -infinity       0  15   30   infinity