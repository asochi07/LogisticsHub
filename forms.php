
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link charset="utf-8">
	<link name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<style type="text/css">
		
		.req {
			color: red
		}
		a:hover {
		text-decoration: none; 
		list-style-type: none; 
		background-color: 
	}
	a {
		text-decoration: none; 
		list-style-type: none; 
		color: white;
	}
	.button {
		background-color: #371c87;
		color: white;
		opacity: 0.4%
	}
	#reg {
		font-size: 30px; 
		border-left: 7px solid #371c87; 
		padding-left: 5px; margin: 15px; 
		border-bottom: 1px solid #371c87; 
		font-weight: bold; 
		font-family: Arial,Helvetica,sans-serif;
	}
	
	.acolor {
		color:blue;
	}
.bghead {
	background-image: url(truck.jpg); 
	background-size: contain; 
	height: 300px; 
	background-color: rgba(255,255,255,0.7); 
	z-index: 1
}
#welc {
	line-height: 250px; 
	color: #ebedef ; font-weight: ; 
	font-family: corbel,Arial ,sans-serif;
}
.clientowner {
	background-color: #371c87; 
	border-bottom: 2px solid #c7cbd1; 
	border-left: 7px solid #c7cbd1; border-top-right-radius: 10px; 
	border-top-left-radius: 10px; 
	color: white
}
.usa {
	color: #371c87; 
	font-weight: bolder;
}
.nav-item {
				margin-left: 70px;
			}
			.navbar {
				background-color: #35475E;
			}
			.nav-link a:hover {
				color: blue;
			}

body {
	background-color: #ccc;
	font-size: 18px;
}

	</style>
</head>
<body>
<?php
include("Myclass.php");
?>
<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col" style="background-color: #371c87;" id="home">
				<nav class="navbar navbar-expand-lg ">
 					<a class="navbar-brand" href="#">AzorLogististics</a>
  					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
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
					        <li class="nav-item">
					        	<a class="nav-link" href="#">Privacy Policy</a>
					        </li>
					        <li class="nav-item dropdown">
					        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 		data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          		Dropdown
					        	</a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							          <a class="dropdown-item" href="forms.php">Sign Up</a>
							          <a class="dropdown-item" href="forms.php">Login</a>
						        </div>
					    	</li>
					    </ul>
					 </div>
					 <div class="mx-5">
					 	<a href="admin.php"><i class="fas fa-user-circle fa-2x"></i>&nbsp;Admin</a>
					 </div>
				</nav>
			</div>
		</div>
	</div>

			<!-- Button trigger modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>  -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ">Save changes</button>
      </div>
    </div>
  </div>
</div>

    
	
									<!-- 	Form Body -->
	<div class="container-fluid">
		<div class="row">
			<div class="col" align="center" style="background-image: url('images/truck2.jpg'); background-size: cover;height: 300px;"><h1 style="line-height: 100px; color: white;display:none;" id="welc" >			---USER LOGIN---</h1>
				<h3 class="col-md-2" style="background-color:#371c87; border-radius: 10px; color: white; padding: 5px" id="boknow" onclick="logins()"><a href="#">Login</a>
				</h3>
			</div>
		</div>
	</div>

												<!-- Login form -->	
<div class="container my-5">
	<div class="row">
		<div class="col-md-6" id="clientlogin" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87; margin: auto">
				<h3 class="clientowner my-3">Existing Users Login</h3>
					<form action="loginclient_action.php" method="POST">
						<legend class="col-form-label col pt-0">Sign Up As:</legend>
							<div class="col-sm-10">
							    <div class="form-check form-check-inline">
							        <input class="form-check-input" type="radio" name="login" value="client">
							        <label class="form-check-label form-check-inline usa" for="clientsignup">Client</label>
							    </div>&nbsp;&nbsp;&nbsp;
							    <div class="form-check form-check-inline">
							        <input class="form-check-input" type="radio" name="login" value="owner">
							        <label class="form-check-label usa" for="ownersignup">Truck Owner</label>
							    </div>&nbsp;&nbsp;&nbsp;<br>
							    <span style="color: red"><?php if(isset($_GET['message'])){ echo $_GET['message'];} ?></span>
							   <!--  <div class="form-check form-check-inline">
							        <input class="form-check-input" type="radio" name="login" value="admin">
							        <label class="form-check-label usa" for="adminsignup">Admin</label>
							    </div> -->
							    <div class="div_text my-2">
									<label for="username" class="text">Username/Email<span class="req">*</span></label>
									<input name="client_username" type="text" id="username" value="" class="col form-control-lg" required  />
								</div>
								<div class="div_text my-2">
									<label for="password" class="text">Password<span class="req">*</span></label>
									<input name="client_password" type="password" id="password" class="col form-control-lg" required  />
								</div>
								<div>
									<small class="req"><?php if(!empty($_GET['info'])){echo $_GET['info'];}  ?></small>
								</div>
								<div class="button_div my-2 text-center">
			                        <input name="rememberme" type="checkbox" id="rememberme"  value="1" />&nbsp;<label for="rememberme">Remember Me</label>&nbsp;&nbsp;
		                        </div>
		                        <div class="button_div my-2 text-center"> <input type="submit" name="" value="Log In" class="btn btn-lg buttons " />
		                        </div>
								<div class="link-text text-center"><span class="link-text-forgot">Forgot password?&nbsp;<a href="" class="acolor">Click here to reset</a></span>
		                    	</div>
			                    <div class="link-text my-1 text-center">
			                    	<span class="link-text-register">New User?&nbsp;<a href="" class="acolor">Click here to register</a></span>
			                    </div>
			                </div>
						</form>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row clientowner my-5">
		<div class="col">
			<form action="myaction.php" method="POST">
				<div class="row" >
				<div class="col-md my-2"  >
					<fieldset class="form-group">
					    <div class="row" id="radios">
					      <legend class="col-form-label col-sm-2 pt-0">Sign Up As:</legend>
					      <div class="col-sm-10">
					        <div class="form-check">
					          <input class="form-check-input" type="radio" name="user" onchange="clientform()" id="clientsignup" value="client">
					          <label class="form-check-label" for="clientsignup">
					            Client
					          </label>
					        </div>
					        <div class="form-check">
					          <input class="form-check-input" type="radio" name="user" onchange="ownerform()" id="ownersignup" value="owner">
					          <label class="form-check-label" for="ownersignup">
					            Truck Owner
					          </label>
					        </div>
					      </div>
					    </div>
  					</fieldset>
				</div>
			</div>
			</form>
		</div>
	</div>
			</div>
	

										<!-- New client registration -->  
	<div class="container"  >
	<div class="row my-3"> 
		<div class="col-md-9" id="clientsignupform" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87; display: none; margin: auto">
            <form name="form" method="post" action="myaction.php" class="form">
				<fieldset>
					<legend class="client-owner">New Client Registration</legend>
						<label for="fullname" class="text">Fullname<span class="req">*</span></label>
							<div class="div_text">
								<input name="client_fullname" type="text" id="fullname" value="" class="col form-control-sm" required  />
							</div>
						<label for="client_username" class="text">Username<span class="req">*</span></label>
							<div class="div_text">
								<input name="client_username" type="text" id="client_username" value="" class="col form-control-sm" 
									required  />
							</div>
						<label for="password" class="text">Password<span class="req">*</span></label>
							<div class="div_text">
								<input name="client_pwd" type="password" id="password" class="col form-control-sm" required  />
							</div>
						<label for="confirm_password" class="text">Confirm Password<span class="req">*</span></label>
							<div class="div_text">
								<input name="confirm_pwd" type="password" id="confirm_password" class="col form-control-sm" required  />
							</div>
						<label for="user_email" class="text">Email<span class="req">*</span></label>
							<div class="div_text">
								<input name="client_email" type="email" id="user_email" value="" class="col form-control-sm" required  />
							</div>
						<label for="cl_address" class="text">Address<span class="req">*</span></label>
							<div class="div_text">
								<input name="client_address" type="text" id="cl_address" value="" class="col form-control-sm" required  />
							</div>
						<label for="cl_phone" class="text">Phone<span class="req">*</span></label>
							<div class="div_text">
								<input name="client_phone" type="text" id="cl_phone" value="" class="col form-control-sm" required  />
							</div>
							<div class="div_text my-3">
								<input name="terms" type="checkbox" id="tos" value="1" required  /><span class="req">*</span> Please indicate that you agree to the <a href="#" onClick="window.open('/user-registration/?tos=display','mywindow');" style="color: blue"> Terms of Service </a>
							</div>
							<div class="button_div">
									<input name="submit" type="submit" value="Register" class="btn btn-lg buttons"/>
							</div>
						<div class="req-text my-3"><span class="req">*</span>Required field</div>
					</fieldset>
				</form>                    
  			</div>
  				


  										<!-- New Vehicle Owner Registration -->
  	
		<div class="col-md-9" id="ownersignupform" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87; display: none; margin: auto">
			<form name="form" method="post" action="owner_reg.php" id="wpmem_register_form" class="form">
				<fieldset>
					<legend class="client-owner">New Vehicle Owner Registration</legend>
						<label for="username1" class="text">First Name<span class="req">*</span></label>
							<div class="div_text">
								<input name="fname" type="text" id="username1" value="" class="col form-control-sm" required  />
							</div>

						<label for="lname" class="text">Last Name<span class="req">*</span></label>
							<div class="div_text">
								<input name="lname" type="text" id="lname" value="" class="col form-control-sm" required  />
							</div>

						<label for="owner_username" class="text">Username<span class="req">*</span></label>
							<div class="div_text">
								<input name="owner_username" type="text" id="owner_username" value="" class="col form-control-sm" 
									required  />
							</div>

						<label for="password" class="text">Password<span class="req">*</span></label>
							<div class="div_text">
								<input name="owner_pwd" type="password" id="password" class="col form-control-sm" required  />
							</div>

						<label for="confirm_password" class="text">Confirm Password<span class="req">*</span></label>
							<div class="div_text">
								<input name="confirm_password" type="password" id="confirm_password" class="col form-control-sm" required  />
							</div>

						<label for="owner_email" class="text">Email<span class="req">*</span></label>
							<div class="div_text">
								<input name="owner_email" type="email" id="owner_email" value="" class="col form-control-sm" required  />
							</div>
				
						<label for="owner_address_1" class="text">Address 1<span class="req">*</span></label>
							<div class="div_text">
								<input name="owner_address" type="text" id="owner_address" value="" class="col form-control-sm" required  />
							</div>

						<label for="owner_phone" class="text">Phone<span class="req">*</span></label>
							<div class="div_text">
								<input name="owner_phone" type="text" id="owner_phone" value="" class="col form-control-sm" required  />
							</div>

							<div class="div_text my-3 text-center">
								<input name="terms" type="checkbox" id="tos" value="1" required  /><span class="req">*</span> Please indicate that you agree to the <a href="#" onClick="" style="color: blue"> Terms of Service </a>
							</div>

							<div class="button_div text-center">
								<input name="submit" type="submit" value="Register" class="btn btn-lg buttons "/>
							</div>
						<div class="req-text my-3 text-center"><span class="req">*</span>Required field</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>

	<!-- <div class="container-fluid">
		<div class="row">
			<div class="mx-5 my-0"  style="position: absolute; bottom: 0px; right: 10px; color: #371c87; z-index:1">
				<a href="admin.php"><i class="fas fa-comments fa-5x"></i></a>
			</div>
		</div>
	</div> -->

	
										<!-- The page footer -->
	<?php
		include('footer.php');
		?>
</div>
<script type="text/javascript" src="js/jquery-3.5.1.min.js" ></script>
<script type="text/javascript">
	
$($("#welc").fadeIn(2000));


	
		function ownerform() {
					var owner = $('#ownersignup').prop('checked');
		if (owner == true) {

			$('#ownersignupform').slideDown(1000);
			$('#clientsignupform').css('display','none');
			$('div #clientlogin').css({display:'none'});

		}
	}
		
		function clientform() {
					var client = $('#clientsignup').prop('checked');
		if (client == true ) {
			$('#clientsignupform').slideDown(1000);
			$('#ownersignupform').css('display','none');
			$('div #clientlogin').css({display:'none'});
		}
				}

		function logins() 
		{
			
				$('div #clientlogin').slideDown(400);
				$('#ownersignupform').css('display','none');
				$('#clientsignupform').css('display','none');

				var owner = $('#ownersignup').prop('checked');
		if (owner == true){
				$('#ownersignup').removeAttr('checked');
		}
		var owner = $('#ownersignup').prop('checked');
		if (owner == true){
				$('#clientsignup').removeAttr('checked');
		}

				
				


			
		}
					
						

		
		
		
		
	





</script>




	
	

	<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>