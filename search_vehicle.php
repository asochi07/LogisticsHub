<?php

include('config.php');

if(isset($_POST['data'])){
	$search = $_POST['data'];
	$stmt = $conn->prepare("SELECT *  FROM vehicle JOIN truck_owner ON truck_owner.id = vehicle.vehicle_id WHERE fname LIKE CONCAT('%',?,'%') OR lname LIKE CONCAT('%',?,'%') OR vehicle_id LIKE CONCAT('%',?,'%')");
	$stmt->bind_param("sss",$search,$search,$search);
}
else{
	$stmt= $conn->prepare("SELECT *  FROM vehicle JOIN truck_owner ON truck_owner.id = vehicle.vehicle_id");
}
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows >0){
		$output ="<thead>
			         <tr>
			            <th>S/N</th>
			            <th>Name of Owner</th>
			            <th>Vehicle ID</th>
			            <th>Type</th>
			            <th>Registration Number</th>
			            <th>Registration Date</th>
			            <th>Driver's Name</th>
			            <th>Owner's ID</th>                         
			         </tr>
				</thead>
			    <tbody>";
				$i = 1;
				while($row =$result->fetch_assoc()){
			         $output .="
			     <tr>
			        <td>".$i++ ."</td>
			        <td>".$row['fname']." ".$row['lname']."</td>
			        <td>". $row['vehicle_id']."</td>
			        <td>". $row['vehicle_name']."</td>
			        <td>". $row['reg_number']."</td> 
			        <td>". $row['registration_date']."</td>
			        <td>". $row['vehicle_driver']."</td>
			        <td>". $row['id']."</td>
			    </tr>";       		
			  }
			   $output .="</tbody>";          		
			   echo $output;        	
			}
			 else{
			   	echo "<h3>No record found!</h4>";
			   }
?>