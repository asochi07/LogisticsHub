<?php


echo "<pre>";
print_r($_POST['data2send']);
	echo "</pre>";
	die();

$id = $data_object->id;
$fullname = $data_object->fullname;
$phone = $data_object->phone;
$email = $data_object->email;
$address = $data_object->address;

$myarray = array("fullname" => $fullname, "phone" => $phone, "email" => $email, "address" => $address);
$clientid = $_SESSION['owner'];
$obj->update_resident($id,$myarray);

?>