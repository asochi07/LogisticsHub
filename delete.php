<?php

include('myclass.php');


$obj = new myclass;
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// die();
if(isset($_GET['booking_id']))
{
	$id = $_GET['booking_id'];
	$res = $obj->delete_booking($id);
}

if(isset($_GET['vehicle_id']))
{
	$vid = $_GET['vehicle_id'];
	$res = $obj->delete_Vehicle($vid);
}



?>