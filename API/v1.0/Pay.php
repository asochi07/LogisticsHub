<?php

class Pay{

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

function insert_details($id,$fullname,$email,$amt){

		$refno = rand();
		 $_SESSION['table'] = $refno;

		$query = "UPDATE booking SET fullname = '$fullname',
		email = '$email',
		booking_amount = '$amt',
		refno = '$refno'
		WHERE booking_id = '$id'";
				
		$res = $this->conn->query($query);
		$id = $this->conn->affected_rows;

			if($id > 0){

			header('location: payment.php');
		}
	}

function get_details($trxno){

	$query = "SELECT * FROM booking WHERE refno = '$trxno'";

	$res=$this->conn->query($query);
	
	$record= $res->fetch_assoc();

	return $record;


}

function update_payment($dataref){
		$id =$_SESSION['table'];
		$query = "UPDATE booking SET paystack_ref = '$dataref' WHERE refno = '$id'";

		$res = $this->conn->query($query);
		}

public function update_payment2($status,$ref){
		 $query="UPDATE booking
		SET pay_status = '$status'
		WHERE refno = '$ref'";

		$res =$this->conn->query($query);
		header('location: dashboard.php?msg= Your payment was successful');
			
		}

	}
?>
