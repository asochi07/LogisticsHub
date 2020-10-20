<?php

include('API/V1.0/Pay.php');

$obj = new Pay;

echo "<pre>";
print_r($_POST);
echo "</pre>";
// die();
$name = htmlentities($_POST['fullname']);
$email = htmlentities($_POST['email']);
$amount = htmlentities($_POST['booking_amount']);
$id =  htmlentities($_POST['id']);

$res = $obj->insert_details($id,$name,$email,$amount);



?>