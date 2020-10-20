<!DOCTYPE html>
<html>
<head lang="en">
	<title></title>
	<link charset="utf-8">
	<link name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.css" integrity="sha512-5m1+8f8jC4ePfYvS39HmjqsYkkragJZaXV7kfreb5pytmTlDnZgXZ73JlYC0Ui25beVJMWLJq8AzDv4ZeXC9mg==" crossorigin="anonymous" />
<link rel="stylesheet"  href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
	<link type="text/css" rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<style type="text/css">
		div {
			border:1px solid black; min-height: 50px;
			}
		.details {
			border-left: 1px solid #ccc
		}/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


	</style>
</head>
<body>
	<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<!-- Page content -->
<div class="content">
  

		<!-- <div class="row" style="display: flex; flex-direction: column; position: sticky; top: 0px; z-index: 1">
			
			<div class="col" style="background-color: #371c87; height: 50px;" id="home">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #371c87; height: 50px;">
					  <a class="navbar-brand" href="#" style="color: white">AzorLogistics</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					<div class="collapse navbar-collapse" id="navbarNav" style="justify-content:center; width: 60%;">
					    <ul class="navbar-nav">
					      	<li class="nav-item active" style="">
					        <a class="nav-link" href="#home" style="color: white; margin-left: -40%">Home <span class="sr-only">(current)</span></a>
					      	</li>
					      	<li class="nav-item" style="margin-left: 5%">
					        <a class="nav-link" href="about_log.html" style="color: white;">About us</a>
					      	</li>
					      	<li class="nav-item" style="margin-left: 5%">
					        <a class="nav-link" href="#portfolio" style="color: white;">Contact</a>
					     	</li>
					     	<li class="nav-link" style="margin-left: 5%; background-color:;">
					        <a class="nav-item" href="#blog" style="color: white;">Privacy Policy</a>
					     	</li>
					        <li class="nav-item dropdown" style="margin-left: 5%">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          Sign Up/Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="forms.php" id="">Sign Up</a>
          <a class="dropdown-item login" href="forms.php">Login</a>
        </div>
      </li>
					    </ul>
					</div>
				</nav>
			</div>
			</div>
 -->
			<div class="container-fluid my-5 py-5">
				<div class="col-10" style="border:1px solid #eee; box-shadow: 5px 5px 10px #371c87">
					
						<h3 class="my-4" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #371c87; color: white; height: 70px; line-height: 70px; padding-left: 10px">Vehicle Owner Dashboard</h3>
						<div class="row">
							<div class="col-9"><h4>My Profile</h4></div>
							<div class="col-md-3">
								<p align="center">Username<br>
								<a href="">Logout</a></p>	
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<p>
									Fullname<br>
									Email<br>
									Address<br>
									Phone<br>
								</p>
							</div>
						<div class="col-md-8 details" >
							<div class="row">
								<div class="col-4"><p>Number of Trucks</p></div>
								<div class="col-3"><p><a href=""><button>Add Truck</button></a></p></div>
								<div class="col-3"><p><a href=""><button>View Truck</button></a></p></div>
								<div class="col-2"><h4><a href="" style=" color: red;">[X]</a></h4></div>
							</div>
							<div class="row">
								<div class="col-4">
									<p>Number of transactions</p>
								</div>
								<div class="col-4"><p>Transaction History</p></div>
								<div class="col-2"><a href=""></a><button>View</button></div>
								<div class="col-2"><h4><a href="" style=" color: red;">[X]</a></h4></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							
						</div>
						<div class="col">
							
						</div>
					</div>
				</div>
			</div>
			
			<?php
				include('footer.php')
			?>
		
</div>

<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>


							