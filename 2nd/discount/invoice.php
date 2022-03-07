<?php
#app
// user -> enter his name
// user -> enter his phone
// user -> select $products = ['laptop'=>15000,'mobile'=>12000,'tv'=>10000,'tshirt'=> 250]
// user -> select  $cities = ['cairo'=>0,'alex'=>50,'others'=>200]
// $discount = ['laptop'=>0.2,'mobile'=>0.1,'tv'=> 0.05 , 'tshirt'=>0]
// vat : 14%

#solution
/*  Name : Galal
    Phone : 01000498488
    Product: Laptop
    City:   Alex
    Delivery Tax : 50 EGP
    Price: 15000 EGP
    VAT:14%
    VAT Price:2100 EGP
    Price After VAT: 17100 EGP
    Discount:20%
    Discount Value:3420 EGP
    Price After Discount:13680 EGP
    Total Price:13730 EGP
*/

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    http_response_code(405);
    echo "Error 405 Method Not Allowed";
    die;
}

define("VAT", 0.14);


switch ($_POST['product']) {
    case 'Laptop':
        $price = 15000;
        $discount = 0.2;
        break;
    case 'Mobile':
        $price = 12000;
        $discount = 0.1;
        break;
    case 'Tv':
        $price = 10000;
        $discount = 0.05;
        break;
    default:
        $price = 250;
        $discount = 0;
}

switch ($_POST['city']) {
    case 'Cairo':
        $delivery = 0;
        break;
    case 'Alex':
        $delivery = 50;
        break;
    default:
        $delivery = 200;
}

/*  
    Name : Galal
    Phone : 01000498488
    Product: Laptop
    City:   Alex
    Delivery Tax : 50 EGP
    Price: 15000 EGP
    VAT:14%
    VAT Value:2100 EGP
    Price After VAT: 17100 EGP
    Discount:20%
    Discount Value:3420 EGP
    Price After Discount:13680 EGP
    Total Price:13730 EGP
*/

$vatValue = $price * VAT;
$priceAfterVat = $price + $vatValue;
$discountPercentage = $discount * 100;
$discountValue = $priceAfterVat * $discount;
$priceAfterDiscount = $priceAfterVat - $discountValue;
$totalPrice = $priceAfterDiscount + $delivery;

?>

<!doctype html>
<html lang="en">

<head>
    <title>Invoice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contianer">
        <div class="row mt-5">
            <div class="col-4 offset-4">
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li> Name : <?= $_POST['name'] ?> </li>
                        <li> Phone : <?= $_POST['phone'] ?> </li>
                        <li> Product: <?= $_POST['product'] ?> </li>
                        <li> City: <?= $_POST['city']  ?> </li>
                        <li> Delivery Tax : <?= $delivery ?> EGP </li>
                        <li> Price: <?= $price ?> EGP </li>
                        <li> VAT:<?= VAT * 100 ?>% </li>
                        <li> VAT Value:<?= $vatValue ?> EGP </li>
                        <li> Price After VAT: <?= $priceAfterVat ?> EGP </li>
                        <li> Discount:<?= $discountPercentage ?>% </li>
                        <li> Discount Value:<?= $discountValue ?> EGP </li>
                        <li> Price After Discount:<?= $priceAfterDiscount ?> EGP </li>
                        <li> Total Price:<?= $totalPrice ?> EGP </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>