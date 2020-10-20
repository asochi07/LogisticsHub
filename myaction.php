<?php


include("Myclass.php");



// $client_fullname = Htmlspecialchars(strtolower(strip_tags($_POST['client_fullname'])));
// $client_username = Htmlspecialchars(strtolower(strip_tags($_POST['client_username'])));
// $client_pwd = Htmlspecialchars(strtolower(strip_tags($_POST['client_pwd'])));
// $client_address = Htmlspecialchars(strtolower(strip_tags($_POST['client_address'])));
// $client_phone = Htmlspecialchars(strtolower(strip_tags($_POST['client_phone'])));
// $client_email = Htmlspecialchars(strtolower(strip_tags($_POST['client_email'])));
// $clientid = Htmlspecialchars(strtolower(strip_tags($_POST['id'])));

// echo "<pre>";
// print_r($_POST);
// 	echo "</pre>";
// 	die(" i got here");

$object = new Myclass();
 $result = $object->register_client($_POST);
 echo $result;

// 	echo "<pre>";
// print_r($result);
// 	echo "</pre>";
// 	die();


?>