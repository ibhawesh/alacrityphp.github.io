<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIEM  |  Alacrity-VI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">


       <link rel="stylesheet"  href="css/eventsmodal.css">
       <link rel="stylesheet"  href="css/in/bootstrap.css">
       <link rel="stylesheet"  href="css/in/mystyle.css">
       
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="js/jquery.repeatable.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
      
<style>.removeButton{ text-align:center;}></style>
<!-- FORMS________________________________________________________________________________________________________________________-->        
<div class="container-fluid top_bar">
    <div class="container">
       <div class= "row">
             <div class="col-sm-4"></div>
             <div class="col-sm-4"></div>
             <div class="col-sm-4 text-right contact_info"><span class="glyphicon glyphicon-signal" style="padding-right:1px"></span>
                     www.siemalacrity.in
             </div>
         </div>
       </div>
</div>
      


<div class="container">
    <div class= "row">
    <div class="col-sm-4 my_menu"><img class="img-responsive" src="images/logo.png" alt="slider"></div>
    <div class="col-sm-4 "></div>
    <div class="col-sm-4"></div>
    </row>
</div><!--end of container-->

<div class="container">
  <div class="row">
    <div class="column-sm-4" ></div>
     <div class ="column-sm-4">
     <div class="container">
        <div class="panel panel-default my_menu">
     <div class="panel-heading">
       <h3 class="panel-title">GROUP PARTICIPANT REGISTRATION</h3>
     </div>
       <div class="panel-body">

      <form class="form-horizontal my_menu contact-form" action="Event.html" id="Registration-form" name="Registration-form"  >
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">GP. Leader's First Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="fname" required="required" >
            </div>
        </div>

        <div class="form-group">
            <label for=" Last Name" class="col-sm-2 control-label">GP. Leader's Last Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control required" name="lname" required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="Contact No." class="col-sm-2 control-label">Contact No:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control required" pattern="^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$" placeholder="    eg. +918768712345"  name="contact" required="required">
              
           </div>
        </div>

        
          <div class="form-group">
             <label for="gmail" class="col-sm-2 control-label required email">Email Id</label>
            <div class="col-sm-10">
              <div class="input-group input-group-sm">
                  <span class="input-group-addon">@</span>
                    <input type="email" required="required" class="form-control" placeholder="">
                </div>
             </div>
         </div>

        <div class="form-group">
           <label for="Contact No." class="col-sm-2 control-label">College/School:</label>
           <div class="col-sm-10">
            <input type="text" class="form-control required" required="required" name="college" required="required"></br>
            </div>
        </div>


           <div class="form-group">
              <fieldset class="todos_labels">
               <div class="repeatable"></div>
                   <div class="form-group" style="text-align:center;">
                      <input type="button" value="Add Members" class=" btn btn-warning add" align="center">
                    </div>
               </fieldset>
           </div>




         <div  style="overflow:hidden;text-align:right;">
           <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
              <a href="Event.html"> <button  class="btn btn-success btn-sm">Select Events</button></a>
              
              
            </div>
         </div>
       </div>

      </form>
    
 
   
      </div><!--end of pannel body-->
       </div><!--end of panel panel-default inside column 2 -->
     </div><!--end of container inside column 2-->
    </div><!--end of second column 2-->
     <div class="column-sm-4" ></div>

  </div><!--end of row-->
</div><!--end of container-->



		<script type="text/template" id="todos_labels">
      <div class="field-group row">
       <div class="container">
        <div class="panel ">
         <div class="panel-body">


           <div class="form-group">
       			<label class="col-sm-2 control-label" for="task_{?}">Members First Name</label>
            <div class="col-sm-10">
  		      	<input type="text" class="form-control" required="required"  name="todos_labels[{?}][task]" value="{task}" id="MFname_{?}">
  			    </div><!-- col-sm-5 -->
          </div><!--form group-->



      <div class="form-group ">
  		
  			<label class="col-sm-2 control-label" for="duedate_{?}">Members Last Name</label>
      <div class="col-sm-10">
  			<input type="text" class=" form-control" required="required"  name="todos_labels[{?}][duedate]" value="{duedate}" id="MLname_{?}">
     
		</div><!-- col-sm-5 -->
       </div><!--form group--> 


       <div class="col-sm-10 removeButton">
      </br> <input type="button" class="btn btn-danger removeButton delete" value="Delete"/>
      </div>



         <div class="form-group">




      
     </div><!--form group-->
			

    
</div><!--end of pannel body-->
  </div><!--end of pannel-->
  		</div><!--end of container-->
    </div><!--field-group row-->
		</script>-->

		<script>
		$(function() {
			$(".todos_labels .repeatable").repeatable({
				addTrigger: ".todos_labels .add",
				deleteTrigger: ".todos_labels .delete",
				template: "#todos_labels",
				startWith: 1,
				max: 3
			});
		});
		</script>

    </body>
</html>
