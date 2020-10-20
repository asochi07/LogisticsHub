<?php

	require('Pay.php');

		$pay = new Pay;
				$number=$_SESSION['table'];
				$refno = $_GET['reference'];
//echo $refno;

				$header = array();
				$header[] ='Content-type: application/json';
				$header[] ='Authorization: bearer sk_test_6f8b92999772f3472b0bc27decb5c7028a40113c'; // My secret ket from paystack

				$obj = curl_init();

				$url = "https://api.paystack.co/transaction/verify/$refno";

 				curl_setopt($obj, CURLOPT_HTTPHEADER, $header);

				curl_setopt($obj, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($obj, CURLOPT_HTTPGET, 1);
				curl_setopt($obj, CURLOPT_URL, $url);

				curl_setopt($obj, CURLOPT_SSL_VERIFYHOST, false);
				curl_setopt($obj, CURLOPT_SSL_VERIFYPEER, false);

				$response = curl_exec($obj);
				$err = curl_error($obj);

				$response_obj=json_decode($response);
				// echo "<pre>";
				// print_r($response_obj);
				// echo "</pre>";
				// die();
				
			//$status = $response_obj->data->status;

			if ($response_obj->data->status == 'success') 
				{
					$status = $response_obj->data->status;
				}
				
			else {$status = 0;}
			
			$pay->update_payment2($status,$number); // -> create a function to insert $response_obj;



?>