<?php
include('Myclass.php');

$obj = new Myclass;

	echo "<pre>";
 print_r($_POST);
	echo "</pre>";
	// die();
$fname = Htmlspecialchars(strtolower(strip_tags($_POST['staff_fname'])));
$lname = Htmlspecialchars(strtolower(strip_tags($_POST['staff_lname'])));
$username = Htmlspecialchars(strtolower(strip_tags($_POST['staff_username'])));
$pwd = Htmlspecialchars(strtolower(strip_tags($_POST['staff_pwd'])));
$address = Htmlspecialchars(strtolower(strip_tags($_POST['staff_address'])));
$phone = Htmlspecialchars(strtolower(strip_tags($_POST['staff_phone'])));
$email = Htmlspecialchars(strtolower(strip_tags($_POST['staff_email'])));

$result = $obj->adminReg($fname , $lname, $username,  $pwd, $address, $phone, $email);
echo $result;



?>