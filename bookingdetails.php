<?php
include('Myclass.php');
$obj = new Myclass;

if(isset( $_GET['booking_id'])){
    $t = $_GET['booking_id'];
    $bk = $obj->all_booking($t);
}
elseif($_GET['booking_id'])
{
    $t = $_GET['tct'];
    $bk = $obj->all_booking($t);
}

// echo "booking_id";
$bk = $obj->all_booking($t);

// echo "<pre>";
// print_r($bk);
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
	</style>
</head>
<body>

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
</nav>

	<div class="container-fluid">
        <div id="span"></div>
        <div class="col text-center my-3"><a href="admindashboard.php" class="btn btn-dark btn-lg">Back</a></div>
		<div class="row view body mx-1">
			<div class="col-md-12  items" style="background-color: #f2f2f2;">
                <div class="table-responsive">
            <table class="table table-hover " border="1px">
                <thead>
                    <tr class="text-center">
                        <th>Booking ID</th>
                        <th>Client ID</th>
                        <th>Client Name</th>
                        <th>Amount</th>
                        <th>Booking Date</th>
                        <th>Pickup Location</th>
                        <th>Delivery Location</th>
                        <th>City</th>
                        <th>No of Truck(s)</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>vehicle_id</th>                          
                        
                    </tr>

                </thead>
                 <tbody>
<?php


 	$ress = $obj->get_bookingBy_id($t);
//     echo "<pre>";
// print_r($ress);
// echo "</pre>";
 	foreach($ress as $value)
                		{	if(isset($value['client_id'])) 
                    

                echo "<tr style='border-top' class='text-center'>";
                echo "<td>".$value['booking_id']."</td>
                	<td>{$value['client_id']}</td>
                	<td>{$value['client_fullname']}</td>"?>
                	<td><?php
                    $num = $value['booking_amount'];
                    $amount = number_format($num, 2);
                        echo $amount ?></td>
        <?php echo "<td>{$value['booking_date']}</td>
                	<td>{$value['pickup_address']}</td>
                	<td>{$value['delivery_address']}</td>
                	<td>{$value['city']}</td>
                	<td>{$value['number_vehicle']}</td>
                	<td>{$value['description']}</td>
                	<td>{$value['pay_status']}</td>
                    <td>{$value['vehicle_id']}</td>
                </tr>";	
                		}

?>


                                               <!--  Booking Details Ends Here -->


                                               

    </tbody>
   </table>

</div>
 </div> 
		</div>
	</div>

                                            <!--  Edit Bookin Form --> 
 
    <div class="wrapper bookingform my-3" id="bookingform">
        <div class="col-6 items" id="booking">
            <form action="bookingaction.php" method="POST" autocomplete="off">
                    <fieldset>
                      <legend class="client-owner text-center col-10" >Edit Booking Form</legend>

                            <div class="form-row py-2">
                            <div class="col-3 line">
                                <label for="clientid" class="text">Client ID<span class="req">*</span></label>
                                </div>
                                    <div class="col-8">
                                    <input type="text" name="client_id" value="<?php echo $value['client_id']; ?>" class="form-control" id="clientid" placeholder="Enter Consignment details" required>
                                        </div>
                                            </div>



            <div class="form-row py-2 ">
                <div class="col-3 line">
                    <label for="pickupcontact" class="text">Booking ID<span class="req">*</span></label>
                        </div>
                            <div class="col-8">
                                <input  type="text" name="booking_id" class="form-control" id="bookingid" value="<?php echo $value['booking_id']; ?>" placeholder="Enter Pickup contact Persons name" class="col form-control-sm" />
                                    </div>
                                        </div>

            <div class="form-row py-2 ">
                <div class="col-3 line">
                    <label for="Vehicle" class="text">Vehicle ID</label>
                        </div>
                            <div class="col-8">
                                <input  type="number" name="vehicle_id" id="vehicle" value="<?php echo $value['vehicle_id']; ?>" placeholder="Enter vehicle ID" class="col form-control" />
                                    </div>
                                        </div>
                            
            <div class="form-row py-2">
                <div class="col-3 line">
                    <label for="amount" class="text">Transportation Fee</label>
                        </div>
                            <div class="col-8">
                                <input name="booking_amount" type="text" id="amount" value="<?php echo $amount ?>" placeholder="" class="form-control" />
                                    </div>
                                        </div>
                            
                            
            <div class="form-row py-2">
                <div class="col-3 line">
                    <label for="pickupdate" class="text">Pickup Date</label>
                        </div>
                            <div class="col-8">
                                <input name="pickup_date" type="text" id="pickupdate" value="<?php echo $value['pickup_date']; ?>" placeholder="" class=" form-control"/>
                                    </div>
                                        </div>
                        
            <div class="form-row py-2">
                <div class="col-3 line">
                    <label for="dropoffdate" class="text">Drop-off Date</label>
                        </div>
                            <div class="col-8">
                                <input name="delivery_date" type="text" id="dropoffdate" placeholder="" value="<?php echo $value['delivery_date']; ?>" class="form-control" />
                                    </div>
                                        </div>

            <div class="form-row py-2">
                <div class="col-3 line">
                    <label for="trip_tracker" class="text">Trip Tracker</label>
                        </div>
                            <div class="col-8">
                                <input name="" type="text" id="trip_tracker" placeholder="" value="<?php echo $value['trip_tracker']; ?>" class="form-control" />
                            </div>
                        </div>

            <div class="form-row py-2">
                <div class="col-3 line">
                    <label for="" class="text">Change Tracker Status<span class="req">*</span></label>
                        </div>
                            <div class="col-3">
                                <input type="radio" id="size" name="trip_tracker" value="On Transit"> On Transit &nbsp;&nbsp;&nbsp;
                                <input type="radio" id="truck_size" name="trip_tracker" value="Flagged"> Flagged 
                            </div>
                        </div>
                            

            <div class="form-row py-2">
                <div class="col-3 line">
                    <label for="remark" class="text">Transit Remark</label>
                        </div>
                            <div class="col-8">
                                <input name="transit_remark"  id="transit_remark" value="<?php echo $value['transit_remark']; ?>" placeholder="" class="form-control"> 
                                    </div>
                                        </div>

            <div class="form-row py-2">
                <div class="col-3 line">
                        </div>
                            <div class="col-8">
                                <input type="hidden" id="size" name="truck_size" value="<?php echo $value['truck_size']; ?>"> 
                                    </div>
                                        </div>                            

                    <input  type="hidden" name="pickup_contact" id="pickup_contact" value="<?php echo $value['pickup_contact']; ?>" placeholder="Enter Pickup contact Persons name" class="col form-control-sm" required  />

                    <input  type="hidden" name="pickup_email" id="pickup_email" value="<?php echo $value['pickup_email']; ?>" placeholder="Email Address" class="col form-control-sm" required  />

                    <input name="pickup_address" type="hidden" id="pickup_address" value="<?php echo $value['pickup_address']; ?>">

                    
                    <input type="hidden" name="city" id="city" value="<?php echo $value['city']; ?>">
                                     

                    <input name="pickup_phone" type="hidden" id="pickup_phone" value="<?php echo $value['pickup_phone']; ?>">

                    <input name="drop_contact" type="hidden" id="drop_contact" value="<?php echo $value['drop_name']; ?>">

                    <input name="drop_phone" type="hidden" id="drop_phone" value="<?php echo $value['drop_phone']; ?>">

                    <input name="delivery_address" type="hidden" id="delivery_address" value="<?php echo $value['delivery_address']; ?>">

                    <input type="hidden" name="description" class="form-control" id="description" value="<?php echo $value['description']; ?>">

                     <input name="number_vehicle" type="hidden" id="number_vehicle" value="<?php echo $value['number_vehicle']; ?>">

                    <div class="py-2" align="center">
                        <button class="btn btn-primary"  id="submitbtn">Update Record</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

<?php
include('footer.php');
?>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        
    <script type="text/javascript">



            // $(document).ready(function()
            // {
            //     $('#submitbtn').click(function()
            //     {
                    
            //         var clientid = $('#clientid').val();
            //         var bookingid = $('#bookingid').val();
            //         var vehicle = $('#vehicle').val();
            //         var amount = $('#amount').val();
            //         var pickupdate = $('#pickupdate').val();
            //         var dropoffdate = $('#dropoffdate').val();
            //         var remark = $('transit_remark').val();
            //         var city = $('#city').val();
            //         var pickup_contact = $('#pickup_contact').val();
            //         var pickup_email = $('#pickup_email').val();
            //         var pickup_address = $('#pickup_address').val();
            //         var pickup_phone = $('#pickup_phone').val();
            //         var drop_contact = $('#drop_contact').val();
            //         var drop_phone = $('#drop_phone').val();
            //         var delivery_address = $('#delivery_address').val();
            //         var truck_size = $('#truck_size').val();
            //         var number_vehicle = $('#number_vehicle').val();
                 
            //         var data2send = {"client_id":clientid, "booking_id":bookingid, "vehicle_id":vehicle, "booking_amount":amount, "pickup_date":pickupdate, "delivery_date":dropoffdate, "transit_remark":remark,
            //             "pickup_contact":pickup_contact,"city":city, "pickup_email":pickup_email, 
            //             "pickup_address":pickup_address, "pickup_phone":pickup_phone, 
            //             "drop_contact":drop_contact, "drop_phone":drop_phone, 
            //             "delivery_address":delivery_address, "truck_size":truck_size, "number_vehicle":number_vehicle};
            //         $.ajax({
            //         url:"bookingaction.php",
            //             data:data2send,
            //             type:'POST',
            //             // datatype:'text',
            //             error:function(m){console.log(m)},
            //             success:function(rsp){
            //                 $('span').html(rsp);
            //             }
            //         });
            //     })
            // })
</script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>