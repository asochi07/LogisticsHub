<?php
include('Myclass.php');
$obj = new Myclass;
if(!isset($_SESSION['admin']) || empty($_SESSION['admin']))
{
	 header('location: forms.php');
}
$record = $obj->get_admin($_SESSION['admin']);
// echo "<pre>";
// print_r($record['id']);
// echo "</pre>"; 

 		 			// 		echo "<pre>";
							// print_r($_SESSION['client']);
							// echo "</pre>";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
		<link name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" href="css/all.css" >
	    <meta>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Azorlogistics</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="layout/main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="layout/main.js"></script>

		<style>
			body{
				font-size: 16px;
			}
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

			.img{
				width: 100px;
				height: 100px;
				border-radius: 100px;
				margin-bottom: 10px;
			}

			.items{
				margin: auto; background-color:#f2f2f2;border-radius: 10px;
			}
			.hidden {
				display: none
			}
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
			a {
				text-decoration: none; color: white;
			}
			a:hover {color:grey;}
			.nav-item {
				margin-left: 70px;
			}
			.navbar {
				background-color: #35475E;
			}
			.nav-link a:hover {
				color: blue;
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

			/*.nav ul li:hover {
				background-color: #ccc; 
			}*/
			nav ul li:hover {
				background-color: #ccc; 
			}
			.tripbtn{
				background-color: #371c87;
				color: white;
			}
			.tabcontent{
				display: none;
			}
		 .main-content {
				overflow-y: hidden;
				overflow-x: hidden; 
				background: url() no-repeat;
				background-position: center;
				background-size: cover;
				height:auto ;
				transition: 0.5s;
				
			}
			#notify {
				border-radius: 50%;
				position: relative;
				left: -10px;
				top: -10px;
			}
			#notify1 {
				border-radius: 50%;
				position: relative;
				left: -10px;
				bottom: -10px;
			}

		</style>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.close').click(function() {
					$('.ad').css('display', 'none');
				})
			})

	
		</script>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">AzorLogististics</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" id="sidebar_btn"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.php">About Us</a>
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
   <div class="mx-5"  id='notify'>
		<?php
			$ree = $obj->notification1();
			echo $ree;		
		?>
	</div>
</nav>

	
		<div class="side-nav side">
			<nav class="">
				<ul>
					<li>
						<a href="#">
							<span><i><img class="img rounded-circle" src="<?php echo $image; ?>" width="50" height="50"><span class='badge badge-success' id='notify1'></span></i></span>
							<span><?php echo "{$record['staff_fname']}"." "."{$record['staff_lname']}";  ?></span>
						</a>
					</li>
					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'myprofile')">
							<span><i class=""></i></span>
							<span>My profile</span>
						</button>
						</div>
					</li>
					<li>
						<a href="#" id="mybooking">
							<span><i class=""></i></span>
							<span>
								<div type="button" data-toggle="modal" data-target="#exampleModal">Edit Profile</div>
							</span>
						</a>
					</li>
					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'allbooking')">
							<span><i class=""></i></span>
							<span>View Bookings</span>
						</button>
						</div>
					</li>
					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'allvehicle')">
							<span><i class=""></i></span>
							<span>View Vehicles</span>
						</button>
						</div>
					</li>
					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'allclient')">
							<span><i class=""></i></span>
							<span>View Clients</span>
						</button>
						</div>
					</li>
					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'allowner')">
							<span><i class=""></i></span>
							<span>View Partners</span>
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
				<div class="row dash items mx-4 title" id="title">
				<div class="col-md-8">DASHBOARD</div>
					<div class="col-md-4">
						<h5 align="center"><?php echo $record['staff_username'] ?></h5>
						<h6 class="col btn-lg btn-success text-center" style="border-radius: 10px"><?php 
					if(isset($_GET['bookinginfo_'])){echo $_GET['bookinginfo_'];}
					if(isset($_GET['feedback'])){echo $_GET['feedback'];}?></h6>
				</div>
			</div>
			</div>
			
			<div class="container-fluid my-3 tabcontent1" id="active1">
				<div class="row">
					<div class="col-md-5 text-center" style="box-sizing: border-box; margin: auto">
						<img src="images/bg1.png" width="100%" height="100%">
					</div>
				</div>
			</div>

			<div class="wrapper tabcontent" id="myprofile">
		<div class="col-md-10 my-3 items" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;">
			<div class="container">
				<div class="row">
			  		<div class="col-md-7 img">
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
			          			<input type="hidden" name="" value="<?php echo $record['id']; ?>">
			     			</form>
			    		</div>
			    	<div class="col-md-5 details">
			      			<blockquote>
			        			<h5><?php echo "{$record['staff_fname']}"." "."{$record['staff_lname']}"; ?></h5>
			        			<small><cite><?php echo $record['staff_address'] ?><i class="fa fa-marker"></i></cite></small>
			     		    </blockquote>
			      			<p><?php echo $record['staff_email'] ?><br>
						    <?php echo $record['staff_phone'] ?><br>
						</p>
			    	</div>
    			</div>
    		</div>  
		</div>
	</div>
			
   
											<!-- Select All Booking -->
		<div class="container-fluid my-3 tabcontent" id="allbooking">
			<div class="row my-3 items">
				<div class="col-md-12 my-3 items" style="background-color: #f2f2f2; display: ">
					<h4 class="text-center ">List Of All Vehicle</h4>
                		<div class="table-responsive">
                			<hr>
		    					<div class="form-inline">
			    					<label for="search" class="font-weight-bold text-dark">Search Record</label>&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="form-control form-control-lg border-primary" name="search" type="text" placeholder="Search" id="search_booking">
		    					</div>
		    				<hr>
		    			<?php
						include 'config.php';
						$stmt = $conn->prepare("SELECT * FROM client");
							$stmt->execute();
							$result= $stmt->get_result();
						?>
	            		<table class="table table-hover table-striped" id="table-booking">
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
			                		$res = $obj->admin_all_booking();
			                		$i = 1;
									foreach($res as $value)
			                		{	?>
			                	<tr style='border-top'>
			                	<td><?php echo $i++ ?></td>
			                	<td id='valid'><?php echo $value['client_id'] ?></td>
			                	<td><?php echo $value['booking_id'] ?></td>
			                	<td><?php echo $value['booking_date']?></td>
			                	<td><?php echo $value['pickup_address']?></td>
			                	<td><?php echo $value['delivery_address']?></td>
			                	<td><?php echo $value['pay_status'] ?></td>
			                	<td><button class="btn" style='background-color:#371c87; color:white;'><a href="bookingdetails.php?booking_id=<?php echo $value['booking_id']?>" id='edit'>View Details</a></button></td>
			                	 </tr>	
			                	<?php	
			                }
			                	?>
			                </tbody>
            			</table>
        			</div> 
    			</div>
    		</div>
    	</div>	
    												<!-- All Booking Ends Here -->
    												
 
   

							<!-- 	All Trucks List Starts Here -->

		<div class="container-fluid my-3 tabcontent" id="allvehicle">
			<div class="row my-3 items">
				<div class="col-md-12 my-3 items">
					<h4 class="text-center ">List Of All Vehicle</h4>
                		<div class="table-responsive">
                			<hr>
		    					<div class="form-inline">
		    						<label for="search" class="font-weight-bold text-dark">Search Record</label>&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="form-control form-control-lg border-primary" name="search" type="text" placeholder="Search" id="search_vehicle">
		    					</div>
		    				<hr>
		    			<?php
						include 'config.php';
						$stmt = $conn->prepare("SELECT * FROM Vehicle");
							$stmt->execute();
							$result= $stmt->get_result();
						?>
            			<table class="table table-hover " id="table-vehicle">
			                <thead>
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
			                <tbody>
			                	<?php
			                		$results = $obj->all_vehicle();
			                		$i = 1;
									foreach($results as $value)
			                		{	?>
			                	<tr>
			                	<td><?php echo $i++ ?></td>
			                	<td><?php echo "{$value['fname']}"." "."{$value['lname']}"; ?></td>
			                	<td><?php echo $value['vehicle_id'] ?></td>
			                	<td><?php echo $value['vehicle_name']?></td>
			                	<td><?php echo $value['reg_number']?></td>
			                	<td><?php echo $value['registration_date']?></td>
			                	<td><?php echo $value['vehicle_driver'] ?></td>
			                	<td><?php echo $value['id'] ?></td>
			                	 </tr>	
			                	<?php	
			                }
			                	?>
			                </tbody>
            			</table>
        			</div> 
    			</div>
    		</div>
    	</div>

    									<!-- All Client Starts Here -->

    	<div class="container-fluid my-3 tabcontent" id="allclient">
    		<div class="row justify-content-center my-3 items">
    			<div class="col-md-12 my-3 items">
					<h4 class="text-center ">List Of All Clients</h4>
                		<div class="table-responsive">
                			<hr>
			    				<div class="form-inline">
			    					<label for="search" class="font-weight-bold text-dark">Search Record</label>&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="form-control form-control-lg border-primary" name="search" type="text" placeholder="Search" id="search_client">
			    				</div>
			    				<hr>
			    			<?php
							include 'config.php';
								$stmt = $conn->prepare("SELECT * FROM client");
									$stmt->execute();
									$result= $stmt->get_result();
								?>
								<table class="table table-hover table-striped" id="table-client">
									<thead>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Client ID</th>
						                        <th>Fullname</th>
						                        <th>Address</th>
						                        <th>Email</th>
						                        <th>Phone</th>                       
						                    </tr>
										</thead>
						                <tbody>
						                <?php
						                		$i = 1;
												while($row =$result->fetch_assoc())
						                		{	?>
						                	<tr>
						                	<td><?php echo $i++ ?></td>
						                	<td id='valid'><?php echo $row['id'] ?></td>
						                	<td><?php echo $row['client_fullname'] ?></td>
						                	<td><?php echo $row['client_address']?></td> 
						                	<td><?php echo $row['client_email']?></td>
						                	<td><?php echo $row['client_phone']?></td>
						                	 </tr>	
						                	<?php	
						                }
						                	?>
						                </tbody>
									</table>
								</div>
    						</div>
    					</div>
    				</div>


    				<div class="container-fluid">
    					<div class="row">
					  		<div class="col my-3  update" id="clientsignupform" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;"> 
					  										<!-- Modal -->

									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <form action="owner_reg.php" method="POST" class="form-group" autocomplete="off">
											<fieldset>
												<legend class="staff-owner">Edit</legend>
												<label for="staff_fname" class="text">First Name<span class="req">*</span></label>
											<div class="div_text">
												<input name="staff_fname" type="text" id="staff_fname" value='<?php echo $record["staff_fname"] ?>' class="col form-control-sm" required  />
											</div>
											<label for="staff_lname" class="text">Last Name<span class="req">*</span></label>
											<div class="div_text">
												<input name="staff_lname" type="text" id="staff_lname" value='<?php echo $record["staff_lname"] ?>' class="col form-control-sm" required  />
											</div>
												<label for="staff_email" class="text">Email<span class="req">*</span></label>
											<div class="div_text">
												<input name="staff_email" type="email" id="staff_email" value="<?php echo $record['staff_email'] ?>" class="col form-control-sm" required  />
											</div>
												<label for="staff_address" class="text">Address<span class="req">*</span></label>
											<div class="div_text">
												<input name="staff_address" type="text" id="staff_address" value="<?php echo $record['staff_address'] ?>" class="col form-control-sm" required  />
											</div>
												<label for="staff_phone" class="text">Phone<span class="req">*</span></label>
											<div class="div_text">
												<input name="staff_phone" type="text" id="staff_phone" value="<?php echo $record['staff_phone'] ?>" class="col form-control-sm" required  />
											</div>
											<div class="div_text">
												<input name="id" type="hidden" id="staff_id" value="<?php echo $record['id'] ?>" class="col form-control-sm" required  />
												 <input class="form-check-input" type="hidden" name="staff_gender" value="<?php echo $record['staff_gender'] ?>">
												 <input name="staff_pwd" type="hidden" id="" class="col form-control-sm" value="<?php echo $record['staff_pwd'] ?>" required  />
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

    									<!-- List of All Truck Owners -->

		<div class="container-fluid my-3 tabcontent" id="allowner">
    		<div class="row justify-content-center my-3 items">
				<div class="col-md-12 mt-2 rounded my-3 items" style="background-color: #f2f2f2;">
					<h4 class="text-center">List Of All Partners</h4>
						<hr>
							<div class="form-inline mb-3">
								<label for="search" class="font-weight-bold text-dark">Search Record</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-control form-control-lg border-primary" name="search" type="text" placeholder="Search" id="search_text">
							</div>
						<hr>
					<?php
					
					$stmt = $conn->prepare("SELECT  id, CONCAT(fname,' ',lname) AS fullname, owner_address, owner_email, owner_phone FROM truck_owner");
					$stmt->execute();
					$result= $stmt->get_result();
						?>
					<div class="table-responsive">	
            			<table class="table table-hover table-striped" id="table-owner">
			                <thead>
			                    <tr>
			                        <th>S/N</th>
			                        <th>Owner ID</th>
			                        <th>Fullname</th>
			                        <th>Address</th>
			                        <th>Email</th>
			                        <th>Phone</th>                       
			                    </tr>
							</thead>
			                <tbody>
			                	<?php
			                		$i = 1;
									while($row =$result->fetch_assoc())
			                		{	?>
			                	<tr>
			                	<td><?php echo $i++ ?></td>
			                	<td id='valid'><?php echo $row['id'] ?></td>
			                	<td><?php echo $row['fullname'] ?></td>
			                	<td><?php echo $value['owner_address']?></td> 
			                	<td><?php echo $value['owner_email']?></td>
			                	<td><?php echo $value['owner_phone']?></td>
			                	 </tr>	
			                	<?php	
			                }
			                	?>
			                </tbody>
            			</table>
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
			$("#search_text").keyup(function() {
				var search = $(this).val();
				$.ajax({
					url: 'search.php',
					method: 'post',
					data:{data:search},
					success:function(res){
						$('#table-owner').html(res);
					}
				});
			});
		});


		$(document).ready(function() {
			$("#search_booking").keyup(function() {
				var search = $(this).val();
				$.ajax({
					url: 'search_booking.php',
					method: 'post',
					data:{data:search},
					success:function(res){
						$('#table-booking').html(res);
					}
				});
			});
		});
			
		$(document).ready(function() {
			$("#search_client").keyup(function() {
				var search = $(this).val();
				$.ajax({
					url: 'search_client.php',
					method: 'post',
					data:{data:search},
					success:function(res){
						$('#table-client').html(res);
					}
				});
			});
		});
			
		$(document).ready(function() {
			$("#search_vehicle").keyup(function() {
				var search = $(this).val();
				$.ajax({
					url: 'search_vehicle.php',
					method: 'post',
					data:{data:search},
					success:function(res){
						$('#table-vehicle').html(res);
					}
				});
			});
		});		


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
			


</script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>
