<?php 


include('Myclass.php');

$obj = new Myclass;

// echo "<pre>";
// print_r($_GET['booking_id']);
// echo "</pre>";
// die();
if(isset( $_GET['booking_id'])){
    $t = $_GET['booking_id'];
    $res = $obj->get_bookingBy_id($t);
}


// echo "booking_id";



		foreach($res as $value)
			{	
				if(isset($value['booking_id']))
					$bc = $value['booking_id'];
			}
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
	<style type="text/css">
		a {
				text-decoration: none; color: white;
			}
			a:hover {color:grey;}
			body {
				background-color: #ccc
			}
		.body { border-radius: 10px; border-left: 5px solid #371c87;border-top: 5px solid #371c87}
        .items{
                margin: auto; background-color:#f2f2f2;border-radius: 10px;  
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
            .update {
            	position: absolute;
            	left: 50%;
            	top: 50%;
            	transform: translate(-50%,-50%);
            }
	</style>
</head>
<body>
		<div class="container">
    				<div class="row">
					  	<div class="col-md-4  update" id="clientsignupform" style="background-color: #f2f2f2; border-radius: 10px; border-left: 2px solid #371c87;"> 
					  			<h4 class="modal-title font-weight-bold" style="color:#371c87;" id="exampleModalLabel">Proceed to make payment</h4>
									    <form action="all_bookingaction.php" method="POST" class="form-group" autocomplete="off">
											<fieldset>
												<!-- <legend>Kindly fill out the fields</legend> -->
													<div class="form-row py-2 ">
								                		<div class="col-3 line">
										                    <label class="text">Name</label>
										                        </div>
										                            <div class="col-md-12">
										                                <input  type="text" name="fullname" value="<?php echo $value["client_fullname"] ?>" placeholder="Enter your name" class="col form-control" />
										                            </div>
										                        </div>
										                        <div class="form-row py-2 ">
								                		<div class="col-3 line">
										                    <label  class="text">Email</label>
										                        </div>
										                            <div class="col-md-12">
										                                <input  type="text" name="email" value="<?php echo $value["client_email"] ?>" class="col form-control" />
										                            </div>
										                        </div>
										                        <div class="form-row py-2 ">
								                		<div class="col-6 line">
										                    <label  class="text">Transaction Amount</label>
										                        </div>
										                            <div class="col-md-12">
										                                <input  type="text" name="booking_amount" value="<?php
										                                 echo number_format($value['booking_amount'], 2)  ?>"  class="col form-control" />
										                                <input type="hidden" name="id" value="<?php echo $value['booking_id'] ?>">
										                            </div>
										                        </div>
													        <button type="button" class="btn btn-dark"><a href="dashboard.php">Back</a></button>
													        <button type="submit" class="btn btn-primary"  id="btn">Submit</button>
													</fieldset>
												</form>						                 
						  						</div>	
										    </div>
										  </div>
										

</body>
</html>
