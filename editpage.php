<?php

session_start();
include('Myclass.php');

// $obj = new Myclass();
//  $obj->all_client();




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link charset="utf-8">
  <link name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <style type="text/css"></style>

</head>
<body>
		<div class="container">
				<div class="row">
					<div class="col-md-10 my-3" id="clientsignupform" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;">
						<?php
						$res = new Myclass;
						$value = $res->get_client($_SESSION['user']);
						?>
								<fieldset>
									<legend class="client-owner">Update Profile</legend>
									<label for="fullname" class="text">Fullname<span class="req">*</span></label>
								<div class="div_text">
									<input name="client_fullname" type="text" id="fullname" value='<?php echo $value["client_fullname"] ?>' class="col form-control-sm" required  />
								</div>
									<label for="user_email" class="text">Email<span class="req">*</span></label>
								<div class="div_text">
									<input name="client_email" type="email" id="user_email" value="<?php echo $value['client_email'] ?>" class="col form-control-sm" required  />
								</div>
									<label for="cl_address" class="text">Address<span class="req">*</span></label>
								<div class="div_text">
									<input name="client_address" type="text" id="cl_address" value="<?php echo $value['client_address'] ?>" class="col form-control-sm" required  />
								</div>
									<label for="cl_phone" class="text">Phone<span class="req">*</span></label>
								<div class="div_text">
									<input name="client_phone" type="text" id="cl_phone" value="<?php echo $value['client_phone'] ?>" class="col form-control-sm" required  />
								</div>
								
								<div class="button_div my-3">
									<input name="submit" type="submit" value="Update" class="buttons"/>
								</div>
								
							</fieldset>						                 
  						</div>
					</div>
				</div>
<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>

</body>
</html>