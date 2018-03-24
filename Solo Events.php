<?php
session_start();
  
$ADMAD=NULL;
if(!empty($_POST['ADMAD']))
$ADMAD = $_POST['ADMAD'];
$_SESSION["ADMAD"] = $ADMAD;
$ADMAD = $_SESSION["ADMAD"];


$Collage_Making=NULL;
if(!empty($_POST['Collage_Making']))
$Collage_Making = $_POST['Collage_Making'];
$_SESSION["Collage_Making"] = $Collage_Making;
$Collage_Making = $_SESSION["Collage_Making"];


$Flip_Flop=NULL;
if(!empty($_POST['Flip_Flop']))
$Flip_Flop = $_POST['Flip_Flop'];
$_SESSION["Flip_Flop"] = $Flip_Flop;
$Flip_Flop = $_SESSION["Flip_Flop"];


$JAM=NULL;
if(!empty($_POST['JAM']))
$JAM = $_POST['JAM'];
$_SESSION["JAM"] = $JAM;
$JAM = $_SESSION["JAM"];




$Mr_MissAlacrity=NULL;
if(!empty($_POST['Mr_MissAlacrity']))
$Mr_MissAlacrity = $_POST['Mr_MissAlacrity'];
$_SESSION["Mr_MissAlacrity"] = $Mr_MissAlacrity;
$Mr_MissAlacrity = $_SESSION["Mr_MissAlacrity"];


$Photography=NULL;
if(!empty($_POST['Photography']))
$Photography = $_POST['Photography'];
$_SESSION["Photography"] = $Photography;
$Photography = $_SESSION["Photography"];


$Selfi=NULL;
if(!empty($_POST['Selfi']))
$Selfi = $_POST['Selfi'];
$_SESSION["Selfi"] = $Selfi;
$Selfi = $_SESSION["Selfi"];



$Sketching=NULL;
if(!empty($_POST['Sketching']))
$Sketching = $_POST['Sketching'];
$_SESSION["Sketching"] = $Sketching;
$Sketching = $_SESSION["Sketching"];


$SoloSinging=NULL;
if(!empty($_POST['SoloSinging']))
$SoloSinging = $_POST['SoloSinging'];
$_SESSION["SoloSinging"] = $SoloSinging;
$SoloSinging = $_SESSION["SoloSinging"];


$Solve_Rubics=NULL;
if(!empty($_POST['Solve_Rubics']))
$Solve_Rubics = $_POST['Solve_Rubics'];
$_SESSION["Solve_Rubics"] = $Solve_Rubics;
$Solve_Rubics = $_SESSION["Solve_Rubics"];


$T_shirt=NULL;
if(!empty($_POST['T_shirt']))
$T_shirt = $_POST['T_shirt'];
$_SESSION["T_shirt"] = $T_shirt;
$T_shirt = $_SESSION["T_shirt"];


$Unplugged=NULL;
if(!empty($_POST['Unplugged']))
$Unplugged = $_POST['Unplugged'];
$_SESSION["Unplugged"] = $Unplugged;
$Unplugged = $_SESSION["Unplugged"];


//session_destroy();

 if ($_SERVER['REQUEST_METHOD'] == 'POST') 
 {

header('location:Solo Event1.php');


}

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIEM | ALACRITY6</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- link cor check selection of thumbnail -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>



       <link rel="stylesheet"  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
       <!--model w3 school -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>

  </head>

  <body>
  <script type="text/javascript">
    jQuery(function ($) {
        // init the state from the input
        $(".image-checkbox").each(function () {
            if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                $(this).addClass('image-checkbox-checked');
            }
            else {
                $(this).removeClass('image-checkbox-checked');
            }
        });

        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
            if ($(this).hasClass('image-checkbox-checked')) {
                $(this).removeClass('image-checkbox-checked');
                $(this).find('input[type="checkbox"]').first().removeAttr("checked");
            }
            else {
                $(this).addClass('image-checkbox-checked');
                $(this).find('input[type="checkbox"]').first().attr("checked", "checked");
            }

            e.preventDefault();
        });
    });
</script>

<style>
    .image-checkbox
    {
        cursor: pointer;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        border: 4px solid transparent;
        outline: 0;
    }

        .image-checkbox input[type="checkbox"]
        {
            display: none;
        }

    .image-checkbox-checked
    {
        border-color: #f58723;
    }
    .MrHead
    {

          font-family: 'Merriweather';font-size: 32px;
    }
    .MrBody{
          font-family: 'Architects Daughter';font-size: 22px;
         padding-top:10px;
         color:black;
           text-align: center;
    }

</style>
<form  method="post">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand text-right contact_info" href="Alacrity.php"><span class="glyphicon glyphicon-signal  " style="padding-right:1px"></span>
      www.siemalacrity.in</a>


      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center text-lg-left MrHead">ALACRITY SOLO EVENTS</h1>

      <div class="row text-center text-lg-left">





        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/ADMAD.JPG" alt="">
            <h3 class="MrBody">1. AD-MAD</h3>
  <input type="checkbox" name="ADMAD" value="ADMAD"
   onchange="this.form.submit()" />


          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">

            <img class="img-fluid img-thumbnail" src="images/event/Cultural/clg.jpg" alt="">
            <h3 class="MrBody">2. Collage Making</h3>
             <input type="checkbox" name="Collage_Making" value="Collage Making"
              onchange="this.form.submit()"
              />
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/FF.JPG" alt="">
            <h3 class="MrBody">3. Flip Flop</h3>
            <input type="checkbox" name="Flip_Flop" value="Flip Flop"
             onchange="this.form.submit()"
             />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/jam.JPG" alt="">
             <h3 class="MrBody">4. Just A Minute</h3>
             <input type="checkbox" name="JAM" value="Just A Minute"
              onchange="this.form.submit()"
              />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/mr.jpg" alt="">
              <h3 class="MrBody">5. Mr. & Miss. Alacrity</h3>
              <input type="checkbox" name="Mr_MissAlacrity" value="Mr. & Miss. Alacrity"
               onchange="this.form.submit()"
               />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Photography.JPG" alt="">
              <h3 class="MrBody">6. Photography</h3>
              <input type="checkbox" name="Photography" value="Photography"
               onchange="this.form.submit()"
               />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/s.png" alt="">
             <h3 class="MrBody">7. Selfi Contest</h3>
             <input type="checkbox" name="Selfi" value="Selfi Contest"
              onchange="this.form.submit()"
              />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Sktch.jpg" alt="">
            <h3 class="MrBody">8. Sketching</h3>
            <input type="checkbox" name="Sketching" value="Sketching"
             onchange="this.form.submit()"
             />
          </a>
        </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/song.JPG" alt="">
            <h3 class="MrBody">9. Solo Singing</h3>
            <input type="checkbox" name="SoloSinging" value="Solo Singing"
             onchange="this.form.submit()"
             />
          </a>
        </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/rc.JPG" alt="">
            <h3 class="MrBody">10. Solve Rubics</h3>
            <input type="checkbox" name="Solve_Rubics" value="Solve Rubics"
             onchange="this.form.submit()"
             />
          </a>
        </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/shirt.JPG" alt="">
            <h3 class="MrBody">11. T-shirt Designing</h3>
            <input type="checkbox" name="T_shirt" value="T-shirt Designing"
             onchange="this.form.submit()"
             />
          </a>
        </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/un.JPG" alt="">
            <h3 class="MrBody">12.Unplugged</h3>
            <input type="checkbox" name="Unplugged" value="Unplugged"
             onchange="this.form.submit()"
             />
          </a>
        </div>
         <style>
            .regBtn{
            
            padding-bottom: 50px;
            text-align: right;

            }

       </style>
                <div class="col-lg-12 col-md-4 col-xs-6 regBtn">
                  <button type="submit"  class="btn btn-success btn-md">Next</button>
                </div>

                
                
                
   	          
  
      </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-12 bg-dark">
   
    </footer>
  

  
</form>


  

  
  </body>

</html>
