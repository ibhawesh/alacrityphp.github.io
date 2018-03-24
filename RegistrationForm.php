<?php
session_start();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_SESSION['name'] =$_POST['name'];
      $_SESSION['contact'] =$_POST['contact'];
      $_SESSION['email'] =$_POST['email'];
      $_SESSION['college'] =$_POST['college'];


        header('location:Select_Solo_Event.php');

    }
?>




<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet"  href="css/eventsmodal.css">
    <link rel="stylesheet"  href="css/in/bootstrap.css">
    <link rel="stylesheet"  href="css/in/mystyle.css">

    <!--fonts -->
    <link href='https://fonts.googleapis.com/css?family=Alike Angular' rel='stylesheet'>
    <style>
	.homm{
		font-family: 'Alike Angular';font-size: 18px;
		
	}
	</style>
</head>
<body>
<div class="container-fluid top_bar">
	<div class="container">
		<div class= "row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4 text-right contact_info homm" style="padding-right:1px; "><span class="glyphicon glyphicon-signal" style="padding-right:1px; "></span>
			<a href="Alacrity.php" style="color: white"> www.siemalacrity.in</a>
		</div>
		</div>
  </div>

</div><!--end of container fluid-->

	<div class="container">
		<div class= "row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			egrergergergergeg
		</div>
		<div class="col-sm-4"></div>
		</div>


</div><!--end of container fluid-->


<div class="container ">
	<div class="row">
	<div class="column-sm-4   " ></div>
	<div class ="column-sm-4  ">
	<div class="container ">
		<div class="panel panel-default my_menu" >
		 <div class="panel-heading ">
 			 <h3 class="panel-title">PARTICIPANT REGISTRATION</h3>
		 </div>
 			 <div class="panel-body"  >

			<form class="form-horizontal my_menu contact-form" action="RegistrationForm.php" method="POST" id="Registration-form" name="Registration-form"  >
				<div class="form-group">
					  <label for="Name" class="col-sm-2 control-label">Your Name:</label>
					  <div class="col-sm-10">
					  	<input type="text" class="form-control"  name="name" required="required" >
					  </div>
				</div>



				<div class="form-group">
					  <label for="Contact No." class="col-sm-2 control-label">Contact No:</label>
					  <div class="col-sm-10">
				  		<input type="tel" class="form-control required" pattern="^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$" placeholder="    eg. +918768712345" id="contact" name="contact" required="required">

				 	 </div>
				</div>


				  <div class="form-group">
   					 <label for="gmail" class="col-sm-2 control-label required email">Email Id</label>
 						<div class="col-sm-10">
 						  <div class="input-group input-group-sm">
 							    <span class="input-group-addon">@</span>
  								  <input type="email" required="required" class="form-control" name="email" id="email" placeholder="">
							  </div>
 						 </div>
 				 </div>

				<div class="form-group">
				 	 <label for="Contact No." class="col-sm-2 control-label">College/School:</label>
				 	 <div class="col-sm-10">
				 	 	<input type="text" class="form-control required" required="required" id="college" name="college" required="required">
					  </div>
				</div>
				 <div  style="overflow:hidden;text-align:right;">
   				 <div class="form-group">
   					 <div class="col-sm-offset-2 col-sm-10">
     					 <button  class="btn btn-success btn-sm">Select Events</button>
    				</div>
 				 </div>
 			 </div>

 			</form>



			</div><!--end of pannel body-->
	   	 </div><!--end of panel panel-default inside column 2 -->
	 	 </div><!--end of container inside column 2-->
		</div><!--end of second column 2-->
   	 

  </div ><!--end of row-->
</div><!--end of container-->

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
