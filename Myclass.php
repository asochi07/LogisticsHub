<?php

class Myclass {

public $conn;

function __construct()
{
	session_start();
	$this->conn = new Mysqli('localhost','root','','logistics');
	if ($this->conn->connect_error)
{
	('Connection Error: '.$this->conn->connect_error);
}

}
function register_client($posted)
{	
	$fullname = Htmlspecialchars(strip_tags($posted['client_fullname']));
	$username = Htmlspecialchars(strtolower(strip_tags($posted['client_username'])));
	$address = Htmlspecialchars(strtolower(strip_tags($posted['client_address'])));
	$phone = Htmlspecialchars(strtolower(strip_tags($posted['client_phone'])));
	$email = Htmlspecialchars(strtolower(strip_tags($posted['client_email'])));
	$pwd = Htmlspecialchars(strtolower(strip_tags($posted['client_pwd'])));
	$clientid = Htmlspecialchars(strtolower(strip_tags($posted['id'])));
	
	if($_POST['id'] != "")
	{


	$query = "UPDATE client SET 
			client_fullname ='$fullname',
	 		client_address = '$address',
			client_phone = '$phone',	
			client_email = '$email',
			client_username = '$username',
			client_pwd = '$pwd' WHERE id = '$clientid'";

			$res =$this->conn->query($query);

			if($this->conn->affected_rows > 0)
			{
				$rsp = array('msg' => 'Record Successfully Updated');
				header('location: dashboard.php?feedback=Record Successfully Updated');
			}
}
else
{
	$querystring = " INSERT INTO client SET
		client_fullname = '$fullname',
		client_username = '$username',
		client_pwd = '$pwd',
		client_address = '$address',
		client_phone = '$phone',
		client_email = '$email'";

		$clientinsert = $this->conn->query($querystring);

		$id = $this->conn->insert_id;
	if ($id > 0)
	{   
		$_SESSION['client']=$id;

// 		echo "<pre>";
// print_r($_SESSION['client']);
// 		echo "</pre>";
		
		header("location: dashboard.php?feedback=Successfully submitted");
	}
	else {
		header("location: dashboard.php?feedback=Error occured");
	}
}

	
}
	function adminReg($fname , $lname, $username,  $pwd, $address, $phone, $email)
	{
		
			$query = "INSERT INTO staff SET 
			staff_fname = '$fname',
			staff_lname = '$lname',
			staff_username = '$username',
			staff_pwd = '$pwd',
			staff_phone = '$address',
			staff_address = '$phone',
			staff_email = '$email'";

			$result = $this->conn->query($query);
			$id =$this->conn->insert_id;
			
			if ($id > 0)
	{   
		$_SESSION['admin']= $id;
		
		header("location: admindashboard.php?feedback=Successfully Registered");
	}
	else {
		header("location: forms.php?feedback=Error occured");
	}
}
			
function register_owner($post)
{
	if(!empty($_POST))
	{

$fname = Htmlspecialchars(strip_tags($post['fname']));
$lname = Htmlspecialchars(strip_tags($post['lname']));
$username = Htmlspecialchars(strtolower(strip_tags($post['owner_username'])));
$password = Htmlspecialchars(strtolower(strip_tags($post['owner_pwd'])));
$address = Htmlspecialchars(strtolower(strip_tags($post['owner_address'])));
$phone = Htmlspecialchars(strtolower(strip_tags($post['owner_phone'])));
$email = Htmlspecialchars(strtolower(strip_tags($post['owner_email'])));
$ownerid = Htmlspecialchars(strtolower(strip_tags($post['id'])));

if($_POST['id'] != "")
{
	$query = "UPDATE truck_owner SET 
			fname ='$fname',
			lname ='$lname',
	 		owner_address = '$address',
			owner_phone = '$phone',	
			owner_email= '$email' WHERE id = '$ownerid'";

			$res =$this->conn->query($query);

			if($this->conn->affected_rows > 0)
			{
				header("location: dashboardpartner.php?feedback=Record successfully update");
			}
			else 
			{
				 header('location:forms.php?feedback= Record not successfully updated, retry');
			}
}
else
{
	$queryowner = " INSERT INTO truck_owner SET
		fname = '$fname',
		lname = '$lname',
		owner_username = '$username',
		owner_pwd = '$password',
		owner_address = '$address',
		owner_phone = '$phone',
		owner_email = '$email'";

		$ownerinsert = $this->conn->query($queryowner);

		$id = $this->conn->insert_id;
	
		if ($this->conn->insert_id > 0)
	{

		$_SESSION['owner']=$id;
		header("location: dashboardpartner.php?feedback=Successfully submitted");
	}
	else 
	{
		 header('location:forms.php?feedback= Record not successfully inserted, retry');
	}
}

	}

}
function login_client($user,$pwd)
{
	
	$query_statement = "SELECT * FROM client WHERE client_username = '$user' AND client_pwd = '$pwd'";
	$log = $this->conn->query($query_statement);
	$total_rows = $log->num_rows;

	if ($total_rows > 0)
	{
			$row =$log->fetch_assoc();
			$_SESSION['user'] = $row['id'];
			
		  header('location:dashboard.php?feedback= You Successfully Logged In');

	}
	else 
	{
		 header('location:forms.php?info= Incorrect Username or password');
	}
}


function login_owner($user,$pwd) 
{
	$query_statement = "SELECT * FROM truck_owner WHERE owner_username = '$user' AND owner_pwd = '$pwd'";
	$log = $this->conn->query($query_statement);
	$total_rows_res = $log->num_rows;
	if ($total_rows_res > 0)
	{
		$row = $log->fetch_assoc();
	$_SESSION['owner'] = $row['id'];
// 		echo "<pre>";
// print_r($_SESSION['owner']);
// echo "</pre>";
// die();
		  header("location: dashboardpartner.php?feedback= You Successfully Logged In");
	}
	else 
	{
		 header('location:forms.php?info= Incorrect Username or password');
	}
}

function admin_login($user,$pwd)
{
	
	$query_statement = "SELECT * FROM staff WHERE staff_username = '$user' AND staff_pwd = '$pwd'";
	$log = $this->conn->query($query_statement);
	$total_rows = $log->num_rows;

	if ($total_rows > 0)
	{
		
			$row =$log->fetch_assoc();
			$_SESSION['admin'] = $row['id'];
			
	// 		 echo '<pre>';
 // 	print_r($_SESSION['admin']);
 // echo '</pre>';
 // die();

		    header('location:admindashboard.php?feedback= You Successfully Logged In');

	}
	else 
	{
		 header('location:forms.php?info= Incorrect Username or password');
	}
}


function insert_booking($postdata)
{
	echo "<pre>";
print_r($_POST);
echo "</pre>";

	if(!empty($_POST))
	{
	// $refno = rand();
	// $_SESSION['table'] = $refno;
	$pickupcontact = trim(htmlentities($postdata['pickup_contact']));
	$pickupemail = trim(strtolower(htmlentities($postdata['pickup_email'])));
	$pickupaddress = trim(strtolower(htmlentities($postdata['pickup_address'])));
	$city = trim(htmlentities($postdata['city']));
	$pickupphone = trim(strtolower(htmlentities($postdata['pickup_phone'])));
	$dropcontact = trim(htmlentities($postdata['drop_contact']));
	$dropphone = trim(strtolower(htmlentities($postdata['drop_phone'])));
	$deliveryaddress = trim(strtolower(htmlentities($postdata['delivery_address'])));
	$description = trim(strtolower(htmlentities($postdata['description'])));
	$amount = $postdata['booking_amount'];
	$size = trim(strtolower(htmlentities($postdata['truck_size'])));
	$numtruck = trim(strtolower(htmlentities($postdata['number_vehicle'])));
	$clientid = $postdata['client_id'];
	$transit_remark = $postdata['transit_remark'];
	$vehicleid = $postdata['vehicle_id'];
	$pickdate = $postdata['pickup_date'];
	$deliverydate = $postdata['delivery_date'];
	$bookingid = $postdata['booking_id'];
	$trip_tracker = $postdata['trip_tracker'];
	

// die('i got here');
	if($_POST['booking_id'] != "")
{
	
	$query = "UPDATE booking SET 
			booking_amount ='$amount',
			pickup_date ='$pickdate',
	 		delivery_date = '$deliverydate',
			transit_remark = '$transit_remark',	
			vehicle_id = '$vehicleid',
			trip_tracker = '$trip_tracker'
			 WHERE booking_id = '$bookingid'";

			$res =$this->conn->query($query);
			if($this->conn->affected_rows > 0)
			{
				 
				 $rsp = array('msg' => 'Record Successfully Updated');
				header('location: admindashboard.php?bookinginfo_=Records have been updated.');
			}
}

else
	{
		$query = "INSERT INTO booking SET
		client_id = '$clientid',
		pickup_name = '$pickupcontact',
		pickup_email = '$pickupemail',
		pickup_address = '$pickupaddress',
		city = '$city',
		pickup_phone = '$pickupphone',
		drop_name = '$dropcontact',
		drop_phone = '$dropphone',
		delivery_address = '$deliveryaddress',
		description = '$description',
		truck_size = '$size',
		number_vehicle = '$numtruck',
		booking_amount = '0.00'";
		
		$result = $this->conn->query($query);
		$id = $this->conn->insert_id;
	// 	echo "<pre>";
 // print_r($result);
 // 	echo "</pre>";
 	

		if($id > 0)
		{
			// die("am here");
			$_SESSION['booking'] = $id;
			 header("location: dashboard.php?bookinginfo_= Your booking was Successful");
		}

	else{
		header('location:dashboard');
		alert('Your booking was not Successful'); 
	}

	}
}
}
function get_owner($id)
	{
		// $ownerid = $id;
		$query = "SELECT  * FROM truck_owner WHERE id = '$id'";
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();
			return  $row;
		
				
	 			//header('location: admindashboard.php');
	}

function get_client($clientid)
{

	$query = "SELECT * FROM client WHERE id = '$clientid'";


	$result = $this->conn->query($query);

	$client = $result->fetch_assoc();
 	return $client;

	
}

function get_admin($adminid)
{

	$query = "SELECT * FROM staff WHERE id = '$adminid'";


	$result = $this->conn->query($query);

	$client = $result->fetch_assoc();
 	return $client;

	
}

public function update_profile($clientid,$post_array)
	{	
		$fullname = trim($post_array['fullname']);
			$phone = trim($post_array['phone']);
			$email = trim($post_array['email']);
			$address = trim($post_array['address']);
			$pwd = trim($post_array['pwd']);
			$clientid = $_SESSION['user'];
			

			$query = "UPDATE client SET 
			client_fullname ='$fullname',
			client_address = '$address',
			client_phone = '$phone',	
			client_email= '$email' WHERE id = '$clientid'";

			$res =$this->conn->query($query);
			if($this->conn->affected_rows)
			{
				$rsp = array('msg' => 'Successful');
				echo json_decode($rsp);
			}
	}


function all_client($clientid)
{
	$query = "SELECT client_fullname, client_phone, client_address, client_email FROM client";
	$result = $this->conn->query($query);

	while($row = $result->fetch_assoc())
	{
		$records[] = $row;
	}
	return $records;
	
}

function get_clientForAdmin()
{
	$query = "SELECT * FROM client";
	$result = $this->conn->query($query);

	while($row = $result->fetch_assoc())
	{
		$records[] = $row;
	}
	return $records;
	
}

function all_admin($clientid)
{
	$query = "SELECT staff_lname, staff_fname, staff_phone, staff_gender, staff_address, staff_email FROM staff";
	$result = $this->conn->query($query);

	while($row = $result->fetch_assoc())
	{
		$records[] = $row;
	}
	$_SESSION['booking'] = $id;
	return $records;
	
}
function all_booking($client)
{	
	$clientid = $client;
	$query = "SELECT * FROM booking WHERE client_id = '$client' ORDER BY booking_id DESC ";
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	 header('location: dashboard');

 }
 function admin_all_booking()
{	
	// $clientid = $_SESSION['user'];
	$query = "SELECT * FROM booking ORDER BY booking_id DESC";
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	 header('location: admindashboard.php');

	 // echo "<pre>";
	 // print_r($records);
	 // echo "</pre>";
	  
 }
 function upload_owner_profile_picture($file_array)
{
	$allowed = ['image/jpeg','image/png','image/gif','image/jpg'];
	$filename = $file_array['name'];
	$filesize = $file_array['size'];
	$filetype = $file_array['type'];
	$tmp = $file_array['tmp_name'];
	$extension = pathinfo($filename, PATHINFO_EXTENSION); //gives you a file extension
	$error = array();
	if($filesize > 2097152)
	{
		$error[] = "This file is too large";
	}
	if($filename =='')
	{
		$error[] = "Please choose a file";
	}

	if(!in_array($filetype, $allowed))
	{
		$error[] = "The file is not allowed";
	}
	if(empty($error))
		{
			$finalfile = rand().'.'.$extension;
			$destination = "images/".$finalfile;
			move_uploaded_file($tmp, $destination);

			$userid = $_SESSION['owner'];
			$query = "UPDATE truck_owner SET owner_pix ='$finalfile' WHERE id = '$userid'";
			$ownerPix = $this->conn->query($query);	
		}
	}
function upload_profile_picture($file_array)
{
	$allowed = ['image/jpeg','image/png','image/gif','image/jpg'];
	$filename = $file_array['name'];
	$filesize = $file_array['size'];
	$filetype = $file_array['type'];
	$tmp = $file_array['tmp_name'];
	$extension = pathinfo($filename, PATHINFO_EXTENSION); //gives you a file extension
	$error = array();
	if($filesize > 2097152)
	{
		$error[] = "This file is too large";
	}
	if($filename =='')
	{
		$error[] = "Please choose a file";
	}

	if(!in_array($filetype, $allowed))
	{
		$error[] = "The file is not allowed";
	}
	if(empty($error))
		{
			$finalfile = rand().'.'.$extension;
			$destination = "images/".$finalfile;
			move_uploaded_file($tmp, $destination);

			$userid = $_SESSION['user'];
			$query = "UPDATE client SET client_pix ='$finalfile' WHERE id = '$userid'";
			$get = $this->conn->query($query);	
		}
	}
function register_truck($truck)
{
	$clientid = $_SESSION['owner'];
	$name = $numtruck = trim(htmlentities($truck['truckname']));
	$regnum = $numtruck = trim(htmlentities($truck['regnumber']));
	$trucktype = trim(htmlentities($truck['trucktype']));
	$driver = trim(htmlentities($truck['vehicle_driver']));
	$query = "INSERT INTO vehicle SET
	truck_owner_id = '$clientid',
	vehicle_name = '$name',
	reg_number ='$regnum',
	vehicle_type = '$trucktype',
	vehicle_driver = '$driver'";
		$result = $this->conn->query($query);
		$vehicle = $this->conn->insert_id;
//echo "<pre>";
// print_r($vehicle);
// 	echo "</pre>";
// 	die();
		if ($vehicle > 0)
	{

		$_SESSION['vehicle']=$vehicle;
		header("location: dashboardpartner.php?feedback= Vehicle successfully registered");
	}
	else {
		header("location: dashboardpartner.php?feedback=Error occured");
	}
		return $result;

}
function all_booking_by_vehicleId_transit($owner1)
{	
	$owner = $owner1;
	$query = "SELECT *  FROM booking JOIN vehicle ON booking.vehicle_id = vehicle.vehicle_id WHERE truck_owner_id = '$owner' AND trip_tracker = 'On transit';";
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	 header('location:dashdashboardpartner.php');
}


function all_booking_by_vehicleId_flagged($owner1)
{	
	$owner = $owner1;
	$query = "SELECT *  FROM booking JOIN vehicle ON booking.vehicle_id = vehicle.vehicle_id WHERE truck_owner_id = '$owner' AND trip_tracker = 'Flagged';";
	$result = $this->conn->query($query);

	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	 header('location:dashdashboardpartner.php');
}
function all_booking_by_vehicleId()
{	

	$query = "SELECT *  FROM booking WHERE vehicle_id = '$vehicleid'";
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	 //header('location:admindashdashboard.php');
}

function get_bookingBy_id($t)
{
	$bookingid = $t;
	$query = "SELECT * FROM booking JOIN client ON booking.client_id = client.id WHERE booking_id = '$bookingid' ORDER BY booking_id DESC ";
// echo $query;
// die();
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	header('location:admindashdashboard.php');
}
function delete_booking($id){
		$query_statement = "DELETE FROM booking WHERE booking_id = '$id'";
		// echo "$query_statement";
		$this->conn->query($query_statement);
		header('location: dashboard.php?feedback1=Deleted');
	}

	function get_bookingBy_clientid($t)
{
	$clientid = $t;
	$query = "SELECT * FROM booking JOIN client ON booking.client_id = client.id WHERE client.id = '$clientid' ORDER BY booking_id DESC ";
// echo $query;
// die();
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	header('location:dashdashboard.php');
}

function all_vehicleBy_ownerID()
{	
	$id = $_SESSION['owner'];
	$query = "SELECT *  FROM vehicle WHERE truck_owner_id = '$id' ORDER BY vehicle_id DESC";
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	 header('location:dashdashboardpartner.php');
}

function all_vehicle()
{	
	
	$query = "SELECT *  FROM vehicle JOIN truck_owner ON truck_owner.id = vehicle.vehicle_id";
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	 header('location:admindashdashboard.php');
}

function delete_Vehicle($id){
		$query_statement = "DELETE FROM vehicle WHERE vehicle_id = '$id'";
		// echo "$query_statement";
		$this->conn->query($query_statement);
		header('location: dashboardpartner.php?feedback1=Truck record successfully deleted');
	}

	function searchWord($items)
	{
		$search = $items['search'];
		$searchq = preg_replace("#[^0-9a-z]#i","", $search); 
		$query = "SELECT  id, CONCAT(fname,' ',lname) AS Fullname, owner_address, owner_email, owner_phone FROM truck_owner  WHERE fname LIKE '%searchq%' OR lname LIKE '%searchq%'; ";
		$res = $this->conn->query($query);
		$count = $this->conn->num_rows();
		$output[] = array();

		if($count < 1){
			$output = "There was no search results!";
		}
		else{
			while($row = $this->conn->fetch_assoc()){
				$output[] = $row;
			}
			return $output;
		}

	}
	function get_details($trxno){

		$query = "SELECT * FROM booking WHERE refno = '$trxno'";

		$res=$this->conn->query($query);
		
		$record= $res->fetch_assoc();

		return $record;
	}

	public function notification($id){
		
		$query = "SELECT * FROM booking WHERE booking_amount <> '0.00'AND pay_status = 'Pending' AND client_id = '$id'";
		$res = $this->conn->query($query);
		$records = $res->num_rows;
		if($records > 0){
			echo "<a href=.admin.php'><i class='fas fa-bell fa-2x'></i><span class='badge badge-danger' id='notify'>$records</span></a>";
		}
	}

	public function notification1(){
		
		$query = "SELECT * FROM booking WHERE booking_amount = '0.00' ";
		$res = $this->conn->query($query);
		$records = $res->num_rows;
		if($records > 0){
			echo "<a href=.admin.php'><i class='fas fa-bell fa-2x'></i><span class='badge badge-danger' id='notify'>$records</span></a>";
		}
	}
	
}

?>