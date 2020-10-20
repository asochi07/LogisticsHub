<?php

// include('Myclass.php');
$r = $_GET['fname'];
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
			.items{
				margin: auto; background-color:#f2f2f2;border-radius: 10px; display: non
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

			.img{
				width: 100px;
				height: 100px;
				border-radius: 100px;
				margin-bottom: 10px;
			}


			.container .details p{
			    font-size:15px;
			    font-weight:bold;
			}
			a {
				text-decoration: none; color: white;
			}
			a:hover {color:grey;}
			.myprofile, .bookingform, .allbooking, .bookingbyid, .updateprofile {display:non; }
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
	<!-- <nav class="navbar navbar-dark bg-dark"> -->
  <!-- Navbar content -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #371c87; margin: auto">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

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
						<a href="#">
							<!-- <span><i><img class="img-md img rounded-circle" src="<?php echo $image; ?>" width="50" height="50"></i></span>
							<span><?php echo $r  ?></span> -->
						</a>
					</li>
					<li>
						<a href="#" id="myprofile">
							<span><i class="active"></i></span>
							<span>My Profile</span>
						</a>
					</li>
					<li>
						<a href="#" id="updateprofile">

							<span><i class=""></i></span>
							<span><div type="button" data-toggle="modal" data-target="#exampleModal">Edit Profile</div></span>
						</a>
					</li>
					<li class="">
						<div class="dropdown col">
				  <a class=" dropdown-toggle" href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: #f0f0f0">
				    bookings
				  </a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    				<a class="dropdown-item" href="#bookingbyid" id="bookingbyid">Edit Booking </a>
    				<a class="dropdown-item" href="#allbooking" id="allbooking">Booking History</a>
  				</div>
  				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    				
  				</div>
			</div>
					</li>
					<li>
						<a href="" id="bookingform">
							<span><i class=""></i></span>
							<span>New Booking</span>
						</a>
					</li>
					<li>
						<a href="logout.php">
							<span><i class=""></i></span>
							<span>Logout</span>
						</a>
					</li>
					
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title" id="title">
				Analytics
			</div>

<div class="col text-center my-3"><a href="dashboard.php" class="btn btn-dark btn-lg">Back</a></div>

<div class="col-10 items" id="booking">
			<form action="" method="POST" autocomplete="">
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
			</div>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
	
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
					});
				})
			})

</script>

<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>