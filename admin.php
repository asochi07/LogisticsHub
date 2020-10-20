
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
		text-decoration: none; list-style-type: none; background-color: 
	}
	a {text-decoration: none; list-style-type: none; color: white;}
	.button {
		background-color: #371c87;
		color: white;
		opacity: 0.4%
	}
	#reg {
		font-size: 30px; border-left: 7px solid #371c87; padding-left: 5px; margin: 15px; border-bottom: 1px solid #371c87; font-weight: bold; font-family: Arial,Helvetica,sans-serif;
	}
	
	.acolor {
		color:blue;
	}
.bghead {
	background-image: url(truck.jpg); background-size: contain; height: 300px; background-color: rgba(255,255,255,0.7); z-index: 1
}
#welc {
	line-height: 250px; color: #ebedef ; font-weight: ; font-family: corbel,Arial ,sans-serif;
}
.clientowner {
	background-color: #371c87; border-bottom: 2px solid #c7cbd1; border-left: 7px solid #c7cbd1; border-top-right-radius: 10px; border-top-left-radius: 10px; color: white
}
.usa {color: #371c87; font-weight: bolder;}

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
		<div class="row" style="display: flex; flex-direction: column; position: sticky; top: 0px; z-index: 1">
			<div class="col"  id="home">
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
				</nav>
			</div>
		</div>
	</div>

	<div class="main-content">
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
		<div class="col-md-6" id="clientlogin" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;">
				<h3 class="clientowner my-3">Existing Users Login</h3>
					<form action="loginclient_action.php" method="POST">
						<legend class="col-form-label col pt-0">Sign Up As:</legend>
							<div class="col-sm-10">
							    
							    <div class="form-check form-check-inline">
							        <input class="form-check-input" type="radio" name="login" value="admin">
							        <label class="form-check-label usa" for="adminsignup">Admin</label>
							    </div>
							    <div class="div_text my-2">
									<label for="username" class="text">Username/Email<span class="req">*</span></label>
									<input name="client_username" type="text" id="username" value="" class="col form-control-md" required  />
								</div>
								<div class="div_text my-2">
									<label for="password" class="text">Password<span class="req">*</span></label>
									<input name="client_password" type="password" id="password" class="col form-control-md" required  />
								</div>
								<div>
									<small class="req"><?php if(!empty($_GET['info'])){echo $_GET['info'];}  ?></small>
								</div>
								<div class="button_div my-2" align="right">
			                        <input name="rememberme" type="checkbox" id="rememberme"  value="1" />&nbsp;<label for="rememberme">Remember Me</label>&nbsp;&nbsp;
			                        <input type="submit" name="" value="Log In" class="btn btn-lg buttons " />
		                        </div>
								<div class="link-text" align="right"><span class="link-text-forgot">Forgot password?&nbsp;<a href="" class="acolor">Click here to reset</a></span>
		                    	</div>
			                    <div class="link-text my-1" align="right">
			                    	<span class="link-text-register">New User?&nbsp;<a href="" class="acolor">Click here to register</a></span>
			                    </div>
			                </div>
						</form>
					</div>
				</div>
			</div>


						<!-- New Admin Registration New Admin Registration New Admin Registration -->
	<div class="container"  id="adminsignupform">
  		<div class="row">
			<div class="col-md-7"  style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;">
				<form name="form" method="post" action="reg_admin_action.php" id="" class="form">
					<fieldset>
						<legend class="client-owner my-3">New Admin Registration</legend>
							<div class="form-row">
								<div class="col-md-6 div_text">
									<label for="stafffname" class="text">First Name<span class="req">*</span></label>
										<input name="staff_fname" type="text" id="" value="" class="col form-control-sm" required  />
								</div>
								<div class="col-md-6 div_text">
									<label for="stafflname" class="text">Last Name<span class="req">*</span></label>
										<input name="staff_lname" type="text" id="stafflname" value="" class="col form-control-sm" required  />
								</div>
							</div>
										
							<div class="form-row">
								<div class="col-md-6 div_text">
									<label for="owner_username" class="text">Username<span class="req">*</span></label>
										<input name="staff_username" type="text" id="" value="" class="col form-control-sm" 
												required  />
								</div>	
								<div class="col-md-6 div_text">
									<label for="admin_email" class="text">Email<span class="req">*</span></label>
										<input name="staff_email" type="email" id="admin_email" value="" class="col form-control-sm" required  />
								</div>
							</div>
										

							<div class="form-row">
								<div class="col-md-6 div_text">
									<label for="adminpassword" class="text">Password<span class="req">*</span></label>
										<input name="staff_pwd" type="password" id="" class="col form-control-sm" required  />
								</div>
								<div class="col-md-6 div_text">
									<label for="confirm_password" class="text">Confirm Password<span class="req">*</span></label>
										<input name="confirm_pwd" type="password"  class="col form-control-sm" required  />
								</div>
							</div>
										
							<div class="form-row">
								<div class="col-md-6 div_text">
									<label for="admin_address_1" class="text">Address 1<span class="req">*</span></label>
										<input name="staff_address" type="text" id="" value="" class="col form-control-sm" required  />
								</div>
								<div class="col-md-6 div_text">
									<label for="admin_phone" class="text">Phone<span class="req">*</span></label>
										<input name="staff_phone" type="text" id="" value="" class="col form-control-sm" required  />
								</div>
							</div>

							<div class="form-row my-2">
								<legend class="col-form-label col pt-0">Gender</legend>
									<div class="col-sm-10">
									    <div class="form-check form-check-inline">
									        <input class="form-check-input" type="radio" name="staff_gender" value="male">
									          <label class="form-check-label form-check-inline usa" for="clientsignup">
									            Male
									          </label>
									    </div>&nbsp;&nbsp;&nbsp;
									    <div class="form-check form-check-inline">
									        <input class="form-check-input" type="radio" name="staff_gender" value="female">
									        <label class="form-check-label usa" for="ownersignup">
									            Female
									        </label>
									    </div>
									</div>
								</div>
						<div class="form-row my-2">
							<div class="col">
								<input name="terms" type="checkbox" id="tos" value="1" required  /><span class="req">*</span> Please indicate that you agree to the <a href="#" onClick=""> Terms of Service </a>
							</div>
						</div>
						<div class="form-row my-2">	
							<div class="col text-center">
								<input name="submit" type="submit" value="Register" class="btn btn-lg buttons"/>
							</div>
						</div>
						<div class="req-text my-3"><span class="req">*</span>Required field</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>


	</div>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js" ></script>
<script type="text/javascript">
	
$($("#welc").fadeIn(2000));

</script>
</body>
</html>