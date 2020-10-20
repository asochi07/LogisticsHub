<?php

// session_start();
include("Myclass.php");

echo '<pre>';
	print_r($_POST);
echo '</pre>';

$object = new Myclass();

$owner = $object->register_owner($_POST);

echo $owner;



?>