<?php

include('config.php');

if(isset($_POST['data'])){
	$search = $_POST['data'];
	$stmt = $conn->prepare("SELECT id, CONCAT(fname,' ',lname) AS fullname, owner_address, owner_email, owner_phone FROM truck_owner WHERE fname LIKE CONCAT('%',?,'%') OR lname LIKE CONCAT('%',?,'%') ");
	$stmt->bind_param("ss", $search,$search);
}
else{
	$stmt= $conn->prepare("SELECT  id, CONCAT(fname,' ',lname) AS fullname, owner_address, owner_email, owner_phone FROM truck_owner");
}
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows >0){
		$output ="<thead>
			        <tr>
			    		<th>S/N</th>
			            <th>Owner ID</th>
			            <th>Fullname</th>
			            <th>Address</th>
			            <th>Email</th>
			            <th>Phone</th>                                
			        </tr>
				</thead>
				<tbody>";
				$i = 0;
				while($row =$result->fetch_assoc()){
			         $output .="
			     <tr>
			        <td>".$i++ ."</td>
			        <td>".$row['id']."</td>
			        <td>". $row['fullname']."</td>
			        <td>". $row['owner_address']."</td> 
			        <td>". $row['owner_email']."</td>
			        <td>". $row['owner_phone']."</td>
			    </tr>";       		
			   }
			   $output .="</tbody>";          		
			   		echo $output;        	
			   }
			   else{
			   	echo "<h3>No record found!</h4>";
			   }
?>


            			