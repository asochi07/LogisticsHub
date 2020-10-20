<?php

include('config.php');

if(isset($_POST['data'])){
	$search = $_POST['data'];
	$stmt = $conn->prepare("SELECT * FROM client WHERE client_fullname LIKE CONCAT('%',?,'%') OR id LIKE CONCAT('%',?,'%')");
	$stmt->bind_param("ss",$search,$search);
}
else{
	$stmt= $conn->prepare("SELECT * FROM client");
}
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows >0){
		$output ="<thead>
			         <tr>
			            <th>S/N</th>
			            <th>Client ID</th>
			            <th>Fullname</th>
			            <th>Address</th>
			            <th>Email</th>
			            <th>Phone</th>                         
			         </tr>
				</thead>
			    <tbody>";
				$i = 1;
				while($row =$result->fetch_assoc()){
			         $output .="
			     <tr>
			        <td>".$i++ ."</td>
			        <td>".$row['id']."</td>
			        <td>". $row['client_fullname']."</td>
			        <td>". $row['client_address']."</td>
			        <td>". $row['client_email']."</td> 
			        <td>". $row['client_phone']."</td>
			    </tr>";       		
			  }
			   $output .="</tbody>";          		
			   echo $output;        	
			}
			 else{
			   	echo "<h3>No record found!</h4>";
			   }
?>