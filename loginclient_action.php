<?php


include("Myclass.php");

// echo '<pre>';
// 	print_r($_POST);
// echo '</pre>';

$obj = new Myclass();

 echo '<pre>';
 	print_r($_POST);
 echo '</pre>';
 // die();

			$username = $_POST['client_username'];
			$pwd = $_POST['client_password'];


if(!empty($_POST))

{
	if(isset($_POST['login'])){
		if ($_POST['login'] == 'client')
	{
		
		$b = $obj->login_client($username,$pwd);
	}

	if ($_POST['login'] == 'owner' )
	 {	
	 	
		$b = $obj->login_owner($username,$pwd);
	}

	if ($_POST['login'] == 'admin')
	{
		
		$b = $obj->admin_login($username,$pwd);
	}
	}
	
	else{
		header('location:forms.php?message=<small>Please select a user</small>');
	}
}
	// 	 echo '<pre>';
 // 	print_r($_SESSION['admin']);
 // echo '</pre>';
 // die();

	


// $_SESSION[$_POST['client_username']] = $username;
// $_SESSION[$_POST['client_username']] = $username;

?>