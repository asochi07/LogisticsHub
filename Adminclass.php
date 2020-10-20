<?php

class Adminclass{

	public $conn;

function __construct()
{
	session_start();
	$this->conn = new Mysqli('localhost','root','','logistics');
	if ($this->conn->connect_error)
{
	('Connection Error: '.$this->conn->connect_error);
}
// echo "I got here";
// die();
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

function all_booking_by_vehicleId()
{	
	$vehicleid = $_SESSION['owner'];
	$query = "SELECT vehicle_id, booking_id, pickup_address,delivery_address, pickup_date, delivery_date  FROM booking WHERE vehicle_id = '$vehicleid' ORDER BY booking_id DESC";
	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	 header('location:dashdashboardpartner.php');
}


// function insert_booking($postdata)
// {
	
// 	$pickupcontact = trim(strtolower(htmlentities($postdata['pickupcontact'])));
// 	$pickupemail = trim(strtolower(htmlentities($postdata['pickupemail'])));
// 	$pickupaddress = trim(strtolower(htmlentities($postdata['pickupaddress'])));
// 	$city = trim(strtolower(htmlentities($postdata['city'])));
// 	$pickupphone = trim(strtolower(htmlentities($postdata['pickupphone'])));
// 	$dropcontact = trim(strtolower(htmlentities($postdata['dropcontact'])));
// 	$dropphone = trim(strtolower(htmlentities($postdata['dropphone'])));
// 	$deliveryaddress = trim(strtolower(htmlentities($postdata['deliveryaddress'])));
// 	$description = trim(strtolower(htmlentities($postdata['description'])));
// 	$amount = trim(strtolower(htmlentities($postdata['amount'])));
// 	$paydetail = trim(strtolower(htmlentities($postdata['paydetail'])));
// 	$paystatus = trim(strtolower(htmlentities($postdata['paystatus'])));
// 	$size = trim(strtolower(htmlentities($postdata['size'])));
// 	$numtruck = trim(strtolower(htmlentities($postdata['numtruck'])));

// 	$clientid = $_SESSION['user'];
// 	// echo "<pre>";
// 	// print_r($clientid);
// 	// echo "<pre>";

// 	$query = "INSERT INTO booking SET
// 		client_id = '$clientid',
// 		pickup_name = '$pickupcontact',
// 		pickup_email = '$pickupemail',
// 		pickup_address = '$pickupaddress',
// 		city = '$city',
// 		pickup_phone = '$pickupphone',
// 		drop_name = '$dropcontact',
// 		drop_phone = '$dropphone',
// 		delivery_address = '$deliveryaddress',
// 		description = '$description',
// 		vehicle_size = '$size',
// 		number_vehicle = '$numtruck',
// 		pay_status = '$paystatus',
// 		booking_amount = '$amount',
// 		pay_details = '$paydetail'";
		
// 		$result = $this->conn->query($query);
// 		$res = $this->conn->insert_id;
// 		$id = $this->conn->insert_id;
// 	// 	echo "<pre>";
//  // print_r($result);
//  // 	echo "</pre>";
 	

// 		if($res > 0)
// 		{
// 			$_SESSION['booking'] = $id;
// 			header('location: dashboard.php');
// 		}
// 		else {
// 			header('location:bookingaction.php');
// 		}

// }

function get_bookingBy_id()
{
	$bookingid = $_SESSION['booking'];
	$query = "SELECT * FROM booking JOIN client ON booking.client_id = client.id WHERE booking_id = '$bookingid' ORDER BY booking_id DESC";

	$result = $this->conn->query($query);
	$record = array();
	while($row = $result->fetch_assoc())
	{
		$record[] = $row;
	}
	 return $record;
	header('location:admindashdashboard.php');
}


}





?>