<?php
include('Myclass.php');

$obj = new Myclass;

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

 if (!isset($_POST)) 
 { 
 	echo "No data, Please try again";
 }
 
 else{
	  $result = $obj->insert_booking($_POST);
}


	
 

?>