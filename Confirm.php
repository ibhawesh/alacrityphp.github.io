
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>SIEM | ALACRITY6</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
	
      
  
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };

</script>
</head>
<body>

<div id="myModal" class="modal fade " data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="Solo Events.php"><button type="button" class="close"  aria-hidden="true">&times;</button></a>
                <h3 class="modal-title">Hi, <?php session_start();
                			$Name= $_SESSION['name'];
							
							echo $Name."<br />";


                  ?> Welcome to SIEM Alacrity 2k18.</h3>
            </div>
            <div class="modal-body">
                <p>You are successfully registered.</p>
                <p>
                		<?php
							
								/*$College= $_SESSION['college'];
							if($College != "")
							echo $College."<br />";

							$Email= $_SESSION['email'];
							if($Email !="")
							echo $Email."<br />";

							$Contact= $_SESSION['contact'];
							if($Contact !="")
							echo $Contact."<br />";ssssss



							$ADMAD = $_SESSION["ADMAD"];
							if($ADMAD !="")
							echo $ADMAD."<br />";

							$Collage_Making = $_SESSION["Collage_Making"];
							if($Collage_Making !="")
							echo $Collage_Making."<br />";

							$Flip_Flop = $_SESSION["Flip_Flop"];
							if($Flip_Flop !="")
							echo $Flip_Flop."<br />";

							$JAM = $_SESSION["JAM"];
							if($JAM !="")
							echo $JAM."<br />";

							$Mr_MissAlacrity = $_SESSION["Mr_MissAlacrity"];
							if($Mr_MissAlacrity !="")
							echo $Mr_MissAlacrity."<br />";

							$Photography = $_SESSION["Photography"];
							if($Photography !="")
							echo $Photography."<br />";

							$Selfi = $_SESSION["Selfi"];
							if($Selfi !="")
							echo $Selfi."<br />";

							$Sketching = $_SESSION["Sketching"];
							if($Sketching !="")
							echo $Sketching."<br />";

							$SoloSinging = $_SESSION["SoloSinging"];
							if($SoloSinging !="")
							echo $SoloSinging."<br />";

							$Solve_Rubics = $_SESSION["Solve_Rubics"];
							if($Solve_Rubics !="")
							echo $Solve_Rubics."<br />";

							$T_shirt = $_SESSION["T_shirt"];
							if($T_shirt !="")
							echo $T_shirt."<br />";

							$Unplugged = $_SESSION["Unplugged"];
							if($Unplugged !="")
							echo $Unplugged."<br />";*/

							 ?>
							</p><br/>
							<h4>We will mail you the entry ticket for above registered events.</h4>
							<h3>Please download Rules and Shedule <a href="">here.</a> </h3><br/>

             
                    <div class="container">
                    	<div class="row">
                    		<div class="col-sm-3 col-md-3 col-xs-3 col-lg-3 "><a href="Select_Solo_Events.php"><button type="submit" class="btn btn-danger">Back</button></a> </div>
                    		<div class="col-sm-2 col-md-2 col-xs-2 col-lg-1"></div>
                    		<div class="col-sm-3 col-md-3 col-xs-3 col-lg-3"><a href="#"><button type="submit" class="btn btn-success">Register</button></a> </div>
                    	
                    	</div>
                    
                    </div>
                                     
            </div>
        </div>
    </div>
</div>
</body>
</html>
