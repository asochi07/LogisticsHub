<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title></title>
	<meta charset="utf-8">
	<link name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="sidebar.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" >


</head>
<body>

	
<!-- header start -->

<header>

	<label for="check">
		<i class="fas fa-bars" id="sidebar_btn"></i>
	</label>

	<div class="left_area">
		<h3>Azor <span>Logistics</span></h3>
	</div>

	<div class="right_area">
		<a href="" class="logout_btn">Logout</a>		
	</div>

</header>
<!-- sidebar starts here -->

<div class="sidebar">
	<center>
		
		<img src="male_avatar.png" class="profile_image" alt="">
		<h4>Fullname</h4>

	</center>

	<a href="#"><i class="fas fa-desktop"></i><span>My Profile</span></a>
	<a href="#"><i class="fas fa-cogs"></i><span>View My Crafts</span></a>
	<a href="#"><i class="fas fa-table"></i><span>Connections</span></a>
	<a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
	<a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
</div>

									<!-- Sidebar ends here -->

		<div class="content">
			<div class="container-fluid my-3">
		<div class="row dash items mx-4 my-3">
				<div class="col-md-8"><h4>DASHBOARD</h4></div>
				<div class="col-md-3">
					<h5 align="center"><?php echo $record['client_username'] ?></h5>
				<h6 class="col btn-success text-center" style="border-radius: 10px"><?php 
				if(isset($_GET['bookinginfo_'])){echo $_GET['bookinginfo_'];}
				if(isset($_GET['feedback'])){echo $_GET['feedback'];}?></h6>
				</div>
			</div>

			<div class="wrapper text-center active1">
				<img src="images/bg1.png" height="205">
			</div>

			<div class="wrapper myprofile" id="myprofile">
		<div class="col-md-10 my-3 items update" id="" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;">
			<div class="container">
				<div class="row">
			  		<div class="col-md-7 img">
			      		<img src="<?php echo $image; ?> "  alt="" width="30%" class="img-rounded"><br><br>
			      			<form action="uploader.php" method="POST" enctype="multipart/form-data">
			      				<input type="file" name="profile_picture">
			       				
			     				<button type="submit" class="btn btn-success btn-sm"><?php if ($b['client_pix']=='')
							      {
							        echo "Upload Picture";
							      }
							      else 
							        { 
							          echo "Change Profile Picture";
							        } ?>
			          			</button><br>
			          			<input type="hidden" name="" value="<?php echo $b['id']; ?>">
			     			</form>
			    		</div>
			    		<div class="col-md-5 details">
			      			<blockquote>
			        			<h5><?php echo $record["client_fullname"] ?></h5>
			        			<small><cite><?php echo $record['client_address'] ?><i class="fa fa-marker"></i></cite></small>
			     		    </blockquote>
			      			<p><?php echo $record['client_email'] ?><br>
						        <?php echo $record['client_phone'] ?><br>
						    </p>
			    		</div>
    			</div>
    		</div>  
		</div></div>

		<div class="wrapper bookingform" id="bookingform">
		<div class="col-10 items" id="booking">
			<form action="bookingaction.php" method="POST" autocomplete="">
					<fieldset>
					  <legend class="client-owner text-center col-10" >Booking Form</legend>
						<div class="form-group">
						<div class="form-row py-2 ">
							<div class="col-3 line">
								<label for="pickupcontact" class="text">Pickup Contact Details<span class="req">*</span></label>
							</div>
							<div class="col-4">
								<input  type="text" name="pickup_contact" id="pickup_contact" value="" placeholder="Enter Pickup contact Persons name" class="col form-control-sm" required  />
							</div>
							
							<div class="col-4">
								<input  type="text" name="pickup_email" id="pickup_email" value="" placeholder="Email Address" class="col form-control-sm" required  />
							</div>
						</div>
						<div class="form-row py-1">
							<div class="col-3 line">
								<label for="password" class="text">Pickup Address<span class="req">*</span></label>
							</div>
							<div class="col-4">
								<input name="pickup_address" type="text" id="pickup_address" placeholder="Enter the Pickup Address here" class="col form-control-sm" required  />
							</div>
							
							<div class="col-4">
								<select class="custom-select col form-control-sm" id="city" name="city">
			                      <option value="lagos">Lagos</option>
			                  </select>
							</div>
						</div>
						 <div class="form-row py-2">
							<div class="col-3 line">
								<label for="confirm_password" class="text">Pickup Contact Phone<span class="req">*</span></label>
							</div>
							<div class="col-4">
								<input name="pickup_phone" type="number" id="pickup_phone" placeholder="Enter Pickup Contact Phone" class="col form-control-sm" required  />
							</div>
						</div>
						<div class="form-row py-2">
							<div class="col-3 line">
								<label for="" class="text">Drop-off Contact Details<span class="req">*</span></label>
							</div>
							<div class="col-4">
								<input name="drop_contact" type="text" id="drop_contact" placeholder="Enter Drop-off Contact Name" value="" class="col form-control-sm" required  />
							</div>
							<div class="col-4">
								<input name="drop_phone" type="numder" id="drop_phone" value="" placeholder="Enter Drop-off Contact Phone" class="col form-control-sm" 
			                  required  />
							</div>
						</div>

						<div class="form-row py-2">
							<div class="col-3 line">
								<label for="last_name" class="text">Delivery Address<span class="req">*</span></label>
							</div>
							<div class="col-4">
								<input name="delivery_address" type="text" id="delivery_address" value="" placeholder="Enter your Delivery Address" class="col form-control-sm" required  />
							</div>
						</div>
						<div class="form-row py-2">
							<div class="col-3 line">
								<label for="last_name" class="text">Consignment Description<span class="req">*</span></label>
							</div>
							<div class="col-8">
			                  <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Consignment details" required></textarea>
						</div>
						</div>

						<div class="form-row py-2">
							<div class="col-3 line ">
								<label for="" class="text">Payment Details<span class="req">*</span></label>
							</div>
							<div class="col-2">
								<input name="booking_amount"  type="hidden" id="" placeholder="Total Amount" value="" class="col form-control-sm" required  />
							</div>
							<div class="col-2">
								<input name="pay_detail"  type="hidden" id="pay_detail" placeholder="Payment Details" value="" class="col form-control-sm" required  />
							</div>
							<div class="col-4">
								<input name="pay_status"  type="hidden" id="pay_status" value="" placeholder="Payment Status" class="col form-control-sm" 
			                  required  />
							</div>
						</div>
						<div class="form-row py-2">
							<div class="col-3 line">
								<label for="" class="text">Vehicle Type/Number<span class="req">*</span></label>
							</div>
							<div class="col-3">
								<input type="radio" id="size" name="truck_size" value="40"> 40ft &nbsp;&nbsp;&nbsp;
								<input type="radio" id="truck_size" name="truck_size" value="20"> 20ft 
							</div>
							<div class="col-4">
								<input name="number_vehicle" type="numder" id="number_vehicle" value="" placeholder="Enter Numberof Vehicle(s)" class="col form-control-sm" 
			                  required  />
			                  <input type="hidden" name="client_id" id="client_id" value="<?php echo $record['id'];  ?>">
							</div>
						</div>
						<div class="form-row py-2">	
						<div class="col-4 offset-2">
							<button class="btn btn-dark btn-lg" type="button">Cancel</button>
						</div>
						<div class="col-4 offset-2">
							<button type="submit" id="submitbtn" >Submit</button>
						</div>			 	  
						</div>
					</div>
				</fieldset>
			</form>
			</div></div>


													<!-- ALL BOOKING BY CLIENT -->

			<div class="wrapper allbooking" id="allbooking">
			   <div class="col-md-12 my-3 items" style="background-color: #f2f2f2;">
                <div class="table-responsive">
            <table class="table table-hover " border="1px">
                <thead>
                    <tr>
                        <th>
                        	<?php
                        		// for ($i=1; $i < ; $i++) { 
                        		// 	# code...
                        		// }

                        	?>
                        </th>
                       		 <th>Client ID</th>
                       			 <th>Booking ID</th>
			                        <th>Booking Date</th>
			                        <th>Pickup Location</th>
                        		<th>Delivery Location</th>
                        	<th>Status</th>
                        <th></th> 
                     </tr>
                </thead>
            <tbody>
                	<?php
                
                 	$obj = new Adminclass;
						 $res = $obj->get_bookingBy_clientid($_SESSION['user']);
				// 		 echo "<pre>";
				// print_r($res[0]['booking_id']);
				// echo "</pre>";

						$tot = count($res);
					$id = $_SESSION['user'];	    	
        
                		foreach($res as $value)
                		{	$bc = $value['booking_id'];

                			echo "<tr border='1px'>";

                			echo "<td>"; echo 1;                				
                			echo "</td>";

	                		echo "<td>".$value['client_id']."</td>
	                	<td>{$value['booking_id']}</td>
	                	<td>{$value['booking_date']}</td>
	                	<td>{$value['pickup_address']}</td>
	                	<td>{$value['delivery_address']}</td>
	                	<td>{$value['pay_status']}</td>
	                	<td><button class='btn'style='background-color:#371c87; color:white;'><a href='bookingdetails.php?tct=$bc' 
	                	id='edit'>View Details</a></button>"?>


	                	<button class='btn btn-danger'><a href="delete.php?booking_id=<?php echo $value['booking_id'] ?>" onclick="return confirm('Are you sure you want to do this?')">Delete</a></button></td>
                	

                </tr>;	
                		<?php } ?>
                	
                	
                </tbody>
            </table>
        </div> 
    </div></div> 


    <div class="wrapper bookingbyid" id="bookingbyid">
    	<div class="col-md-12 my-3 items" style="background-color: #f2f2f2; display: ">
                <div class="table-responsive">
            <table class="table table-hover " border="1px">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Client ID</th>
                        <th>Booking ID</th>
                        <th>Booking Date</th>
                        <th>Pickup Location</th>
                        <th>Delivery Location</th>
                        <th>Status</th>
                         <th></th>                          
                        
                    </tr>

                </thead>
                 <tbody>
                	<?php
                	$obj = new Myclass;
						$res = $obj->admin_all_booking();
						// echo "<pre>";
						// 	print_r($res);
						// echo "</pre>";

                		foreach($res as $value)
                		{	?>
                	<tr style='border-top'>
                	<td>the one</td>
                	<td id='valid'><?php echo $value['client_id'] ?></td>
                	<td><?php echo $value['booking_id'] ?></td>
                	<td><?php echo $value['booking_date']?></td>
                	<td><?php echo $value['pickup_address']?></td>
                	<td><?php echo $value['delivery_address']?></td>
                	<td><?php echo $value['pay_status'] ?></td>
                	<td><button class="btn" style='background-color:#371c87; color:white;'><a href="bookingdetails.php?tct=<?php echo $value['client_id']?>" id='edit'>View Details</a></button> <button class='btn btn-danger'><a href="delete.php?booking_id=<?php echo $value['booking_id'] ?>" onclick="return confirm('Are you sure you want to do this?')">Delete</a></button></td>
                	

                </tr>	
                	<?php	}
                	?>
                	
                </tbody>
            </table>
        </div> 
    </div>
    </div>
 			<div class="wrapper ">
			   <div class="col-md-10 my-3" id="clientsignupform" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;">
						
							<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 			aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form action="myaction.php" method="POST" class="form-group">
								<fieldset>
									<legend class="client-owner">Update Profile</legend>
									<label for="fullname" class="text">Fullname<span class="req">*</span></label>
								<div class="div_text">
									<input name="client_fullname" type="text" id="fullname" value='<?php echo $record["client_fullname"] ?>' class="col form-control-sm" required  />
								</div>
									<label for="user_email" class="text">Email<span class="req">*</span></label>
								<div class="div_text">
									<input name="client_email" type="email" id="user_email" value="<?php echo $record['client_email'] ?>" class="col form-control-sm" required  />
								</div>
									<label for="cl_address" class="text">Address<span class="req">*</span></label>
								<div class="div_text">
									<input name="client_address" type="text" id="cl_address" value="<?php echo $record['client_address'] ?>" class="col form-control-sm" required  />
								</div>
									<label for="cl_phone" class="text">Phone<span class="req">*</span></label>
								<div class="div_text">
									<input name="client_phone" type="text" id="cl_phone" value="<?php echo $record['client_phone'] ?>" class="col form-control-sm" required  />
									<input type="hidden" name="id" value="<?php echo $record['id'] ?>">
									<input name="client_username" type="hidden" id="client_username" value="<?php echo $record['client_username'] ?>" class="col form-control-sm" 
									required  />
									<input name="client_pwd" type="hidden" value="<?php echo $record['client_pwd'] ?>" id="password" class="col form-control-sm" required  />
								</div>
								
								<div class="button_div my-3">
									<input name="submit" type="submit" value="Update" id="btn" />
								</div>
								</fieldset>	
							</form>						                 
  						</div>
				     </div>
				  </div>
				</div>
			</div>						                 
  						</div> 
  					</div>	
  	
	</div>
	<?php
		include('footer.php');
	?>
</div>

		<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
		
	<script type="text/javascript">

 		$(document).ready(function() {
 	$('.nav-trigger').click(function() {
 		$('.side-nav').toggleClass('visible');
 	});
 });


		
		$(document).ready(function(){
			$('#bookingform').click(function(){
				$.ajax({
					url:booking.php,
					type:'POST',
					success:function(rsp){
							$('span').html(rsp);
				})
			})
		})

		$(document).ready(function()
			{
				$('#submitbtn').click(function()
				{
					var city = $('#city').val();
					var pickup_contact = $('#pickup_contact').val();
					var pickup_email = $('#pickup_email').val();
					var pickup_address = $('#pickup_address').val();
					var pickup_phone = $('#pickup_phone').val();
					var drop_contact = $('#drop_contact').val();
					var drop_phone = $('#drop_phone').val();
					var delivery_address = $('#delivery_address').val();
					var truck_size = $('#truck_size').val();
					var number_vehicle = $('#number_vehicle').val();
					var data2send = {"pickup_contact":pickup_contact,'city':city, 'pickup_email':pickup_email, 'pickup_address':pickup_address, 'pickup_phone':pickup_phone, 'drop_contact':drop_contact, 'drop_phone':drop_phone, 'delivery_address':delivery_address, 'truck_size':truck_size, 'number_vehicle':number_vehicle, 'client_id':client_id};
					$.ajax({
					url:"bookingaction.php",
						data:data2send,
						type:'POST',
						// datatype:'text',
						error:function(m){console.log(m)},
						success:function(rsp){
							$('span').html(rsp);
						}
					})
				})
			})
</script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
		</div>
</body>
</html>