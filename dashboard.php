<?php




include('Myclass.php');


$obj = new Myclass;

if(!isset($_SESSION['user']) || empty($_SESSION['user']))
{
	 header('location: forms.php');
}


	$record = $obj->get_client($_SESSION['user']);

	if (!isset($_SESSION['user']) || empty($_SESSION['user']))
{
  header('location:index.php');
}

$b = $obj->get_client($_SESSION['user']);

// echo "<pre>";
// print_r($b);
// 	echo "</pre>";

if ($b['client_pix'] == '')
{
  $image = 'male_avatar.png';
}
else
{
  $image = 'images/'.$b['client_pix'];
}

// echo "<pre>"; 
// print_r($_GET['bookinginfo_']);
// echo "</pre>";
    

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script> -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" href="css/all.css" >
	    <meta>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Responsive vertical menu navigation</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="layout/main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="layout/main.js"></script>

		<style>
			.ad {
				position: absolute;
				width: 300px;
				height: 250px;
				border: 1px solid #ddd;
				left: 50%;
				transform: translateX(-50%);
				top: 250px;
				z-index: 10;
			}

			.side-nav {
				height: 100%
				z-index: 0;
			}
			.ad .close {
				position: absolute;
				font-family: 'ionicons';
				width: 20px;
				height: 20px;
				color: #fff;
				background-color: #999;
				font-size: 20px;
				left: -20px;
				top: -1px;
				display: table-cell;
				vertical-align: middle;
				cursor: pointer;
				text-align: center;
			}

			.nav{
				height: 100%;
			}

			.img{
				width: 50px;
				height: 50px;
				border-radius: 100px;
				margin-bottom: 10px;
			}
			.img1{
				width: 100px;
				height: 100px;
				border-radius: 100px;
				margin-bottom: 10px;
			}

			.items{
				margin: auto; background-color:#f2f2f2;border-radius: 10px;  
			}
			/*.hidden {
				display: none
			}*/
				.container{
    			padding:5%;
			}
			.container .img{
			    text-align:center;
			}
			.container .details{
			    border-left:3px solid #ded4da;
			}
			.container .details p{
			    font-size:15px;
			    font-weight:bold;
			}
			.req {
				color: red;
			}
			a {
				text-decoration: none; color: white;
			}
			a:hover {color:grey;}
			.tabcontent{
				display: none;
			}
			.main-content{
				background: url() no-repeat;
				background-position: center;
				background-size: cover;
				height: 100vh;
				transition: 0.5s;
			}

				ul li .tab button {
			  background-color: inherit;
			  border: none;
			  outline: none;
			  cursor: pointer;
			  transition: 0.3s;
			}
			ul li .tab button{
				color: white; 
			}

			ul li button.active {
				background-color: #371c87; 
			}

			.nav ul li:hover {
				background-color: #ccc;

			}

			.navbar {
				background-color: #35475E;
			}

			.nav-item {
				margin-left: 70px;
			}

			body{
				font-size: 18px;
			}
			.main-content{
				overflow-x: hidden;
				/*overflow-y: hidden;*/
			}
			#notify {
				border-radius: 50%;
				position: relative;
				left: -10px;
				top: -10px;
			}

		</style>
		<script type="text/javascript">
			$(function() {
				$('.close').click(function() {
					$('.ad').css('display', 'none');
				})
			})
		</script>

	</head>
	<body>
	
	<nav class="navbar navbar-expand-lg" style="z-index: 4; position: sticky; top: 0px">
  <a class="navbar-brand" href="#"><img style="background-color: white" class="img-md img1 rounded-circle text-center" src="images/cover1.png" width="30" height="30"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-comments"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        	<a class="nav-link" href="about_us.php">About Us</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Privacy Policy</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="forms.php">Sign Up</a>
          <a class="dropdown-item" href="forms.php">Login</a>
        </div>
    </ul>
  </div>
   <div class="mx-5">
			<?php
			$notificationResult = $obj->notification($_SESSION['user']);
			echo $notificationResult;
			?>
		</span></a>
	</div>
</nav>

		<!-- <div class="container-fluid">
			<div class="row"> -->
		<div class="side-nav side">	
			<nav class="nav">
				<ul>
					<li>
						<div>
						<a href="#">
							<span><i><img class="img-md img rounded-circle text-center" src="<?php echo $image; ?>" width="20" height="20"></i></span>
							<span><?php echo $record['client_fullname'];  ?></span>
						</a>
						</div>
					</li>
					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'myprofile')">
							<span><i class=""></i></span>
							<span>My Profile</span>
						</button>
						</div>
					</li>
					<li>
						<div class="tab">
						 <button class="tablinks" onclick="openCity(event, 'editprofile')">
							<span><i class=""></i></span>
							<span>Edit Profile</span>
						</button>
						</div>
					</li>

					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'newbooking')">
							<span><i class=""></i></span>
							<span>New Booking</span>
						</button>
						</div>
					</li> 

					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'allbooking')">
							<span><i class=""></i></span>
							<span>All Booking</span>
						</button>
						</div>
					</li>
	
					<li>
						<div>
						<a href="logout.php">
							<span><i class=""></i></span>
							<span>Logout</span>
						</a></div>
					</li>
					
				</ul>
			</nav>
		</div>

		<div class="main-content">
			
			<div class="container-fluid">
				<div class="row dash items mx-4" id="title">
					<div class="col-md-8 my-2">DASHBOARD</div>
						<div class="col-md-4 my-2">
							<h5 align="center"><?php echo $record['client_username'] ?></h5>
							<h6 class="col btn-lg btn-success text-center" style="border-radius: 10px"><?php 
								if(isset($_GET['bookinginfo_'])){echo $_GET['bookinginfo_'];}
								if(isset($_GET['feedback'])){echo $_GET['feedback'];}?>
							</h6>
						</div>
					</div>
				</div>

	

		<div class="container-fluid my-3 main-body">
			<div class="row">
				<div class="col-md-5 text-center tabcontent1 my-3" id="active1" style="box-sizing: border-box; margin: auto">
				<img src="images/bg1.png" width="100%" height="100%">
			</div>
			</div>
		</div>

			
	<div class="container-fluid tabcontent" id="myprofile">
		<div class="row">
		<div class="col-md-8 items" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;">
			<div class="container">
				<div class="row">
			  		<div class="col-md-7 img ">
			      		<img src="<?php echo $image; ?> "  alt="" width="20%" height="" class="img-rounded"><br>
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
    		</div>  
		</div>
	</div>
	

		<!-- <div class="wrapper tabcontent my-3" id="newbooking"> -->
			<div class="container  tabcontent my-3"  id="newbooking">
				<div class="row">
					<div class="col-10 items">
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
					</div>	
				</div>
			</div>
		<!-- </div> -->


													<!-- ALL BOOKING BY CLIENT -->

			<div class="container-fluid tabcontent" id="allbooking">
			   <div class="row my-3 items">
                <div class="col-md-12 table-responsive">
		            <table class="table table-hover table-striped display"  id="maTable">
		                <thead>
		                    <tr align="center">
		                        <th>S/N</th>
		                       		<th>Client ID</th>
		                       			<th>Booking ID</th>
					                        <th>Booking Date</th>
					                        	<th>Pickup Location</th>
		                        			<th>Delivery Location</th>
		                        		<th>Transaction Amount</th>
		                        	<th>Status</th>
		                        <th></th> 
		                    </tr>
		                </thead>
			            <tbody>
			                	<?php
			                
							$res = $obj->get_bookingBy_clientid($_SESSION['user']);
							// 		 echo "<pre>";
							// print_r($res);
							// echo "</pre>";


							
							$id = $_SESSION['user'];
							$i = 1;
			                		foreach($res as $value)
			                		{	if(isset($value['booking_id'])){
			                			$bc = $value['booking_id'];
			                		 
			                		}
			                			 
			                		?>
			                	<tr align="center">
			                		<td><?php echo $i++ ?></td>
			                		
			                	
				                		<td><?php echo $value['client_id'] ?></td>
				                			<td><?php echo $value['booking_id'] ?></td>
				                				<td><?php echo $value['booking_date'] ?></td>
				                					<td><?php echo $value['pickup_address'] ?></td>
				                				<td><?php echo $value['delivery_address'] ?></td>
				                			<td id="payment"><?php
				                				$num = $value['booking_amount'];
                    							$amount = number_format($num, 2);
				                			 echo $amount  ?></td>
				                		<td id="status"><?php echo $value['pay_status'] ?></td>
				                	<td><button class="btn" style='background-color:#371c87; color:white;'><a href="payment_page.php?booking_id=<?php echo $value['booking_id']?>" id='edit'>Make Payment</a></button>

									<button class='btn btn-danger'>
										<a href="delete.php?booking_id=<?php echo $value['booking_id'] ?>" onclick="return confirm('Are you sure you want to do this?')"><i style="color:red" class="fas fa-trash-alt"></i>&nbsp;Delete</a></button></td>
			                	</tr>	

								<?php } ?>
			                </tbody>
			            </table>
	        		</div>
		        	<div class="col-md-12 text-center">
		      			<ul class="pagination pagination-lg pager" id="myPager"></ul>
		      		</div> 
		    	</div>
		    </div> 

<!-- <a href='bookingdetails.php?booking_id=<?php echo $bc?>' 
				                	></a> -->
     
 			<!-- <div class="wrapper tabcontent" id="editprofile"> -->
 				
 				<div class="container-fluid tabcontent" id="editprofile">
				<div class="row">
			   <div class="col-md-7 my-3" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87; margin: auto;">
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
								
								<div class="button_div my-3 text-center">
									<input name="submit" type="submit" class="btn" value="Update" id="btn" />
								</div>
								</fieldset>	
							</form>						       
						</div>						                 
  					</div> 
  				</div>
  			<!-- </div> -->	

  				<div class="container-fluid">
    					<div class="row">
					  		<div class="col my-3  update" id="clientsignupform" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;"> 
					  										<!-- Modal -->

									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h4 class="modal-title font-weight-bold" style="color:#371c87;" id="exampleModalLabel">Proceed to make payment</h4>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <form action="all_bookingaction.php" method="POST" class="form-group" autocomplete="off">
											<fieldset>
												<!-- <legend>Kindly fill out the fields</legend> -->
													<div class="form-row py-2 ">
								                		<div class="col-3 line">
										                    <label class="text">Name</label>
										                        </div>
										                            <div class="col-md-12">
										                                <input  type="text" name="fullname" value="<?php echo $record["client_fullname"] ?>" placeholder="Enter your name" class="col form-control" />
										                            </div>
										                        </div>
										                        <div class="form-row py-2 ">
								                		<div class="col-3 line">
										                    <label  class="text">Email</label>
										                        </div>
										                            <div class="col-md-12">
										                                <input  type="text" name="email" value="<?php echo $record["client_email"] ?>" class="col form-control" />
										                            </div>
										                        </div>
										                        <div class="form-row py-2 ">
								                		<div class="col-6 line">
										                    <label  class="text">Transaction Amount</label>
										                        </div>
										                            <div class="col-md-12">
										                                <input  type="text" name="booking_amount" value="<?php
										                                 echo $value['booking_amount']  ?>"  class="col form-control" />
										                                <input type="hidden" name="id" value="<?php echo $value['booking_id'] ?>">
										                            </div>
										                        </div>
										                    <div class="modal-footer">
													        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
													        <button type="submit" class="btn btn-primary"  id="btn">Submit</button>
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
  						<!-- </div>
  					</div>
	 -->
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
 		




 		$(document).ready( function () {
    $('#maTable').DataTable();
} );

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById('active1').style.display = "none";
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

		
		
	
		

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
			});

// 		$.fn.pageMe = function(opts) {
//     var $this = this,
//         defaults = {
//             perPage: 7,
//             showPrevNext: false,
//             hidePageNumbers: false
//         },
//         settings = $.extend(defaults, opts);

//     var listElement = $this;
//     var perPage = settings.perPage;
//     var children = listElement.children();
//     var pager = $('.pager');

//     if (typeof settings.childSelector != "undefined") {
//         children = listElement.find(settings.childSelector);
//     }

//     if (typeof settings.pagerSelector != "undefined") {
//         pager = $(settings.pagerSelector);
//     }

//     var numItems = children.size();
//     var numPages = Math.ceil(numItems / perPage);

//     pager.data("curr", 0);

//     if (settings.showPrevNext) {
//         $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
//     }

//     var curr = 0;
//     while (numPages > curr && (settings.hidePageNumbers == false)) {
//         $('<li><a href="#" class="page_link">' + (curr + 1) + '</a></li>').appendTo(pager);
//         curr++;
//     }

//     if (settings.showPrevNext) {
//         $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
//     }

//     pager.find('.page_link:first').addClass('active');
//     pager.find('.prev_link').hide();
//     if (numPages <= 1) {
//         pager.find('.next_link').hide();
//     }
//     pager.children().eq(1).addClass("active");

//     children.hide();
//     children.slice(0, perPage).show();

//     pager.find('li .page_link').click(function() {
//         var clickedPage = $(this).html().valueOf() - 1;
//         goTo(clickedPage, perPage);
//         return false;
//     });
//     pager.find('li .prev_link').click(function() {
//         previous();
//         return false;
//     });
//     pager.find('li .next_link').click(function() {
//         next();
//         return false;
//     });

//     function previous() {
//         var goToPage = parseInt(pager.data("curr")) - 1;
//         goTo(goToPage);
//     }

//     function next() {
//         goToPage = parseInt(pager.data("curr")) + 1;
//         goTo(goToPage);
//     }

//     function goTo(page) {
//         var startAt = page * perPage,
//             endOn = startAt + perPage;

//         children.css('display', 'none').slice(startAt, endOn).show();

//         if (page >= 1) {
//             pager.find('.prev_link').show();
//         } else {
//             pager.find('.prev_link').hide();
//         }

//         if (page < (numPages - 1)) {
//             pager.find('.next_link').show();
//         } else {
//             pager.find('.next_link').hide();
//         }

//         pager.data("curr", page);
//         pager.children().removeClass("active");
//         pager.children().eq(page + 1).addClass("active");

//     }
// };

// $(document).ready(function() {

//     $('#myTable').pageMe({
//         pagerSelector: '#myPager',
//         showPrevNext: true,
//         hidePageNumbers: false,
//         perPage: 4
//     });

// });



</script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>