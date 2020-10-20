<?php
	require('API/v1.0/Pay.php');
		$payobj = new Pay;

				echo "<pre>";
				print_r($_SESSION['table']);
				echo "</pre>";
				// die();

				$number = $_SESSION['table'];

				$deets = $payobj->get_details($_SESSION['table']);

				echo $deets['fullname']." You are paying " . 
				number_format($deets['booking_amount'],2).
				" for transaction with ref no: ". '<b>'.$_SESSION['table']. '</b>';

				echo "<br> Please wait while we load the payment gateway: <br>";

				// make curl call

				$data = json_encode(['email'=>$deets['email'], 'amount'=>$deets['booking_amount']]);

				$header = array();
				$header[] ='Content-type: application/json';
				$header[] ='Authorization: bearer sk_test_6f8b92999772f3472b0bc27decb5c7028a40113c'; // My secret key from paystack 

				$obj = curl_init();
				echo curl_error($obj);
				$url = "https://api.paystack.co/transaction/initialize";

				curl_setopt($obj, CURLOPT_POSTFIELDS, $data);  //NEW ADDITTION

				curl_setopt($obj, CURLOPT_HTTPHEADER, $header); // send header

				curl_setopt($obj, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($obj, CURLOPT_URL, $url);
				curl_setopt($obj, CURLOPT_SSL_VERIFYHOST, false);
				curl_setopt($obj, CURLOPT_SSL_VERIFYPEER, false);

				$response = curl_exec($obj);

				curl_close($obj);
				$response_obj = json_decode($response);

				// echo "<pre>";
				// 	print_r($response_obj);
				// echo "</pre>";
				// die();
				 
				$url = $response_obj->data->authorization_url;
				$reference = $response_obj->data->reference;

				$payobj->update_payment($reference, );

				header("location: $url");

?>