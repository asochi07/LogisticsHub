<?php

$conn = new Mysqli('localhost','root','','logistics');
	if ($conn->connect_error)
{
	die('Connection Error: '.$conn->connect_error);
}

?>