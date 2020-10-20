<?php include('Myclass.php');


$obj = new Myclass;


if(!isset($_SESSION['owner']) || empty($_SESSION['owner']))
{
	 header('location: forms.php');
}


	$record = $obj->get_owner($_SESSION['owner']);
	

// 	echo "<pre>";
// print_r($record);
// 	echo "</pre>";


	if (!isset($_SESSION['owner']) || empty($_SESSION['owner']))
{
  header('location:index.php');
}

$b = $obj->get_owner($_SESSION['owner']);

// echo "<pre>";
// print_r($b);
// 	echo "</pre>";


if ($b['owner_pix'] == '')
{
  $image = 'male_avatar.png';
}
else
{
  $image = 'images/'.$b['owner_pix'];
}


     

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
			.side-nav {height: 100vh}

			.main-content{
				background: url() no-repeat;
				background-position: center;
				background-size: cover;
				height: 100vh;
				transition: 0.5s;
			}

			.nav{ 
				height: 100%
			}
			a {
				text-decoration: none; color: white;
			}
			.items{
				margin: auto; background-color:#f2f2f2;border-radius: 10px;
			}
			.img{
				width: 100px;
				height: 100px;
				border-radius: 100px;
				margin-bottom: 8px;
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
			.dash {
				border:1px solid #eee; 
				box-shadow: 2px 2px 5px #ccc
			}
			ul li .tab button {
			  background-color: inherit;
			  border: none;
			  outline: none;
			  cursor: pointer;
			  transition: 0.3s;
			}
			nav ul li .tab button{
				color: white; 
			}

			nav ul li button.active {
				background-color: #371c87; 
			}

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
			.main-content   {
				/*overflow-y:hidden;*/
				overflow-x:hidden;
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
		<div>
		<div class="header">
			<div class="logo">
				<i class=""></i>
				<span>AzorLogistics</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav side">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>AzorLogistics</span>
			</div>


			<nav class="">
				<ul>
					<li>
						<div>
						<a href="#">
							<span><i><img class="img-md img rounded-circle" src="<?php echo $image; ?>" width="50" height="50"></i></span>
							<span><?php echo "{$b['fname']}"." "."{$b['lname']}"; ?></span>
						</a>
					</div>
					</li>
					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'myprofile1')">
							<span><i class=""></i></span>
							<span>My Profile</span>
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
					<li class="">
						<a href="#">
							<span><i class=""></i></span>
							<span>
								<div type="button"  data-toggle="modal" data-target="#truckregister">
								  Truck Registration
								</div>
							</span>
						</a>
					</li>
					<li >
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'trips')">
							<span><i class=""></i></span>
							<span>View Trips</span>
						</button>
						</div>
					</li>
					<li>
						<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'allvehicle')">
							<span><i class=""></i></span>
							<span>View Trucks</span>
						</button>
						</div>
					</li>
					<li>
						<div>
						<a href="logout.php">
							<span><i class=""></i></span>
							<span>Logout</span>
						</a>
					</div>
					</li>
					
				</ul>
			</nav>
		</div>
		

			<div>active
			<div class="main-content">
				<div class="container-fluid">
				<div class="row dash items mx-4 my-3" id="title">
					<div class="col-md-8"><h3>DASHBOARD</h3></div>
						<div class="col-md-3">
							<h5 align="center"><?php echo $b['owner_username'] ?></h5>
							<h6 class="col text-center btn btn-md" id="span" style="border-radius: 10px; background-color: #371c87;color: white;"><?php
								if(isset($_GET['feedback1'])){echo $_GET['feedback1'];}
								if(isset($_GET['feedback'])){echo $_GET['feedback'];}?>
							</h6>
						</div>
					</div>
				</div>
			<div class="col-md-3"><P id="span"></P></div>

		<!-- 	<div class="container-fluid my-3 main-body"> -->

		
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5 text-center tabcontent1" id="active1" style="box-sizing: border-box; margin: auto">
				<img src="images/bg1.png" width="100%" height="100%">
			</div>
				</div>
			</div>
			
			 	<div class="wrapper tabcontent" id="myprofile1">
						<div class="container items">
						<div class="row" >
						  	<div class="col-md-7 img  ">
						      	<img src="<?php echo $image; ?> "  alt="" width="20%" class="img-rounded"><br>
						      		<form action="owner_uploader.php" method="POST" enctype="multipart/form-data">
						      				<input type="file" name="profile_picture">
						       				<input type="hidden" name="" value="<?php echo $b['id']; ?>">
						     				<button type="submit" style="background-color: #371c87; color: white;" class="btn btn-sm"><?php if ($b['owner_pix']=='')
										      {
										        echo "Upload Picture";
										      }
										      else 
										        { 
										          echo "Change Picture";
										        } ?>
						          		</button>
						     		</form>
						    	</div>
						    	<div class="col-md-5 details">
						      		<blockquote>
						        			<h5 class="font-weight-bold"><?php echo "{$b['fname']}"." "."{$b['lname']}"; ?></h5>
						        			<span><cite><i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;<?php echo $b['owner_address'] ?><i class="fa fa-marker"></i></cite></span>
						     		</blockquote>
						      		   <p><i class="fas fa-envelope fa-1x"></i>&nbsp;<?php echo $b['owner_email'] ?><br>
									<span><i class="fas fa-phone-alt fa-1x"></i>&nbsp;<?php echo $b['owner_phone'] ?></span><br>
								</p>
						    </div>
					    </div>
					</div>
				</div>
				
													<!-- Button trigger modal -->
					 
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
												<legend class="client-owner">Edit</legend>
												<label for="owner_fname" class="text">First Name<span class="req">*</span></label>
											<div class="div_text">
												<input name="fname" type="text" id="owner_fname" value='<?php echo $record["fname"] ?>' class="col form-control-sm" required  />
											</div>
											<label for="owner_lname" class="text">Last Name<span class="req">*</span></label>
											<div class="div_text">
												<input name="lname" type="text" id="owner_lname" value='<?php echo $record["lname"] ?>' class="col form-control-sm" required  />
											</div>
												<label for="user_email" class="text">Email<span class="req">*</span></label>
											<div class="div_text">
												<input name="owner_email" type="email" id="owner_email" value="<?php echo $record['owner_email'] ?>" class="col form-control-sm" required  />
											</div>
												<label for="owner_address" class="text">Address<span class="req">*</span></label>
											<div class="div_text">
												<input name="owner_address" type="text" id="owner_address" value="<?php echo $record['owner_address'] ?>" class="col form-control-sm" required  />
											</div>
												<label for="owner_phone" class="text">Phone<span class="req">*</span></label>
											<div class="div_text">
												<input name="owner_phone" type="text" id="owner_phone" value="<?php echo $record['owner_phone'] ?>" class="col form-control-sm" required  />
											</div>
											<div class="div_text">
												<input name="id" type="hidden" id="owner_id" value="<?php echo $record['id'] ?>" class="col form-control-sm" required  />
												
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
			
						<!-- closing div for wrapper -->
						<div class="container-fluid">
							<div class="row">						
								<div class="col-md-12" id="truck">
							<!-- Modal Triger for truck registration --> 

														<!-- Modal -->
									<div class="modal fade" id="truckregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Register Your Truck Here</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									      <form action="truckregaction.php" method="POST">	
									       <fieldset>
												<legend class="client-owner"><h4>Register Your Truck Here</h4></legend>
												<label for="truckname" class="text">Truck Name<span class="req">*</span></label>
											<div class="div_text">
												<input name="truckname" type="text" id="truckname" value='' class="col form-control-sm" required  />
											</div>
											<label for="regnumber" class="text">Truck Registation Number<span class="req">*</span></label>
											<div class="div_text">
												<input name="regnumber" type="text" id="regnumber" value='' class="col form-control-sm" required  />
											</div>

											<label for="regnumber" class="text">Vehicle Driver<span class="req">*</span></label>
											<div class="div_text">
												<input name="vehicle_driver" type="text" id="vehicle_driver" value='' class="col form-control-sm" required  />
											</div>
												<label for="trucktype" class="text my-1">Truck Type<span class="req">*</span></label>
											<div class="div_text">
												<select name="trucktype" class="form-control-sm">
													<option value="">--Please Select--</option>
													<option value="40FT">FLATBED 40FT</option>
													<option value="20FT">FLATBED 20FT</option>
													<option value="TIPPER">TIPPER 28TONS</option>
												</select>
											</div>
											<div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <button type="submit" class="btn btn-primary">Save changes</button>
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

				 					<!-- Vehicle List by Booking ID -->

			<div class="wrapper tabcontent" id="trips">
				<div class="container-fluid">
				<div class="row">
				 	<div class="col-md-2 my-3  items">
						  	<div class="row">
						  		<div class="col my-3">
						  			<button type="button" class="btn  btn-sm tripbtn" >Active Trips</button></div>
								<div class="col my-3">
									<button type="button" class="btn  btn-sm tripbtn">Flagged Trips</button>
						  		</div>
						  	</div>
						</div>
					</div> 
						  								<!-- Trips on Transit -->
			        	<div class="wrapper" id="activetrip">
							<div class="row my-3 items">
								<div class=" col-md-12 table-responsive">
			            			<table class="table table-hover table-striped">
						                <thead>
						                    <tr class="text-center">
						                        <th>S/N</th>
						                        <th>Vehicle ID</th>
						                        <th>Booking ID</th>
						                        <th>Pickup Address</th>
						                        <th>Delivery Address</th>
						                        <th>Pickup Date</th>
						                        <th>Delivery Date</th>
						                        <th>Trip Status</th>
						                    </tr>
										</thead>
						            	<tbody>
						            	<?php
						      //       	
												$res = $obj->all_booking_by_vehicleId_transit($_SESSION['owner']);
												// echo "<pre>";
												// print_r($res);
												// echo "</pre>";
												// die();
													$i = 1;
												foreach($res as $value)
						                		{	
						                			echo "<tr class='text-center'>";
						                			echo "<td>$i++</td>";
						                			echo "<td>".$value['vehicle_id']."</td>
								                	<td>{$value['booking_id']}</td>
								                	<td>{$value['pickup_address']}</td>
								                	<td>{$value['delivery_address']}</td>
								                	<td>{$value['pickup_date']}</td>
								                	<td>{$value['delivery_date']}</td>
								                	<td>{$value['trip_tracker']}</td>
								                	<td>Details</td>
						                		</tr>";	
						                		}
						                		?>
							 			</tbody>
									</table>
								</div>
			  				</div>
						</div>
												<!-- 	Flagged Trips -->

					<div class="wrapper" id="flagged">
							<div class="row my-3 items">
								<div class="col-md-12 table-responsive">
			            			<table class="table table-hover table-striped table-cell" >
						                <thead>
						                    <tr class="text-center">
						                        <th>S/N</th>
						                        <th>Vehicle ID</th>
						                        <th>Booking ID</th>
						                        <th>Pickup Address</th>
						                        <th>Delivery Address</th>
						                        <th>Pickup Date</th>
						                        <th>Delivery Date</th>
						                        <th>Trip Status</th>
						                    </tr>
										</thead>
						            	<tbody>
						            	<?php
						      //       	echo "<pre>";
												// print_r($_SESSION['owner']);
												// echo "</pre>";
												// die();
												$res = $obj->all_booking_by_vehicleId_flagged($_SESSION['owner']);
													$i = 1;
												foreach($res as $value)
						                		{	
						                			echo "<tr class='text-center'>";?>
						                			<td> <?php echo $i++ ?></td>
						                			<?php
						                			echo "<td>".$value['vehicle_id']."</td>
								                	<td>{$value['booking_id']}</td>
								                	<td>{$value['pickup_address']}</td>
								                	<td>{$value['delivery_address']}</td>
								                	<td>{$value['pickup_date']}</td>
								                	<td>{$value['delivery_date']}</td>
								                	<td>{$value['trip_tracker']}</td>
								                	<td>Details</td>
						                		</tr>";	
						                		}
						                		?>
							 			</tbody>
									</table>
								</div>
			  				</div>
						</div>
					</div>
				</div>
			<!-- </div> -->

											<!-- List Of Partners Trucks -->

			<div class="wrapper tabcontent" id="allvehicle">
				<div class="container-fluid">
							<div class="row my-3 items">
								<div class=" col-md-12 table-responsive">
			            			<table class="table table-hover table-striped">
						                <thead>
						                    <tr  class="text-center">
						                        <th>S/N</th>
						                        <th>Vehicle ID</th>
						                        <th>Vehicle Name</th>
						                        <th>Registration Number</th>
						                        <th>Truck Type</th>
						                        <th>Registration Date</th>
						                        <th></th>
						                    </tr>
										</thead>
						            	<tbody>
						            	<?php
						      //        	echo "<pre>";
												// print_r($_SESSION['owner']);
												// echo "</pre>";
												// die();
												$res = $obj->all_vehicleBy_ownerID($_SESSION['owner']);
													$i = 1;
												foreach($res as $value)
						                		{	
						                			echo "<tr  class='text-center'>";?>
						                			 <td><?php echo $i++ ?></td>
						                			<?php echo "<td>".$value['vehicle_id']."</td>
								                	<td>{$value['vehicle_name']}</td>
								                	<td>{$value['reg_number']}</td>
								                	<td>{$value['vehicle_type']}</td>
								                	<td>{$value['registration_date']}</td>"?>
								                	<td><button class='btn btn-danger'>
										<a href='delete.php?vehicle_id=<?php echo $value['vehicle_id'] ?>' onclick="return confirm('Are you sure you want to do this?')">Delete</a></button></td>	
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
		</div></div>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">


		 $(document).ready(function() {
 	$('.nav-trigger').click(function() {
 		$('.side-nav').toggleClass('visible');
 	});
 });

// 		function openCity(evt, cityName) {
//   // Declare all variables
//   var i, tabcontent, tablinks;

//   // Get all elements with class="tabcontent" and hide them
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }

//   // Get all elements with class="tablinks" and remove the class "active"
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//   }

//   // Show the current tab, and add an "active" class to the button that opened the tab
//   document.getElementById('active1').style.display = "none";
//   document.getElementById(cityName).style.display = "block";
//   evt.currentTarget.className += " active";

// }



		

		
			
				// $('#btn').click(function()
				// {
				// 	var fname =$('#owner_fname').val();
				// 	var lname =$('#owner_lname').val();
				// 	var address = $('#owner_address').val();
				// 	var phone = $('#owner_phone').val();
				// 	var email = $('#owner_email').val();
				// 	var id = $('#owner_id').val();
				// 	var data2send = {"id":$id,"fname":$fname,"lname":$lname,"owner_phone":$phone,"owner_address":$address,"owner_email":$email};
				// 	$.ajax({
				// 		url:"owner_reg.php",
				// 		method:'POST',
				// 		data:{data2send},
				// 		error:function(m){console.log(m)},
				// 		success:function(rsp){
				// 			$('#span').html(rsp);
				// 		}
				// 	});
				// });
		
			
				
		


</script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>
	

		