<?php 
#if(TRUE || FALSE) { //code }
$x = [];
// $x = 0 , '0' , '' , false , null , []
if($x){ echo "ok"; }

$order = 'p';

// $order = 's';

// $order = 'w';

// $order = 'd';

if($order == 'p'){ // 25%
    $status = "Pending";
}elseif($order == 's'){ // 25%
    $status = "Shipped";
}elseif($order == 'w'){ // 25%
    $status = "On My Way";
}else{ // 100-all
    $status = "Deliverd";
}

// echo $status;


$user_status = 'Active';
if($user_status == 'Active'){
    $message = 'Online';
}

// echo $message;