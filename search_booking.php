<?php

include('config.php');

if(isset($_POST['data'])){
	$search = $_POST['data'];
	$stmt = $conn->prepare("SELECT * FROM booking WHERE booking_id LIKE CONCAT('%',?,'%') OR client_id LIKE CONCAT('%',?,'%')");
	$stmt->bind_param("ss",$search,$search);
}
else{
	$stmt= $conn->prepare("SELECT * FROM booking");
}
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows >0){
		$output ="<thead>
			         <tr>
			            <th>S/N</th>
			            <th>Booking ID</th>
			            <th>Client ID</th>
			            <th>Booking Date</th>
			            <th>Pickup Location</th>
			            <th>Delivery Location</th>
			            <th>Status</th>
			            <th></th>                          
			         </tr>
				</thead>
			    <tbody>";
				$i = 1;
				while($row =$result->fetch_assoc()){
			         $output .="
			     <tr>
			        <td>".$i++ ."</td>
			        <td>".$row['booking_id']."</td>
			        <td>". $row['client_id']."</td>
			        <td>". $row['booking_date']."</td>
			        <td>". $row['pickup_address']."</td> 
			        <td>". $row['delivery_address']."</td>
			        <td>". $row['pay_status']."</td>
			        <td><button class='btn' style='background-color:#371c87; color:white;'><a href='bookingdetails.php?booking_id=".addslashes($row['booking_id'])." id='edit'>View Details</a></button></td>
			    </tr>";       		
			  }
			   $output .="</tbody>";          		
			   echo $output;        	
	      }
	       else{
			   	echo "<h4>No record found!</h4>";
			   }
?>