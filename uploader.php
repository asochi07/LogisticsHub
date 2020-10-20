<?php

require('Myclass.php');

$obj = new Myclass;

if(!isset($_SESSION))
{
 	header('location:login.php');
}
$obj->upload_profile_picture($_FILES['profile_picture']);
 header('location:dashboard.php');

return $obj;

$obj->upload_owner_profile_picture($_FILES['profile_picture']);
header('location:dashboardpartner.php');
return $obj;
// // echo "<pre";
// print_r($obj);
// echo "</pre";
?>