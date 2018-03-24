<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>siemalacrity</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- link cor check selection of thumbnail -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>


       <link rel="stylesheet"  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand text-right contact_info" href="#"><span class="glyphicon glyphicon-signal" style="padding-right:1px"></span>
      www.siemalacrity.in</a>
       
       
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center text-lg-left MrHead">ALACRITY GROUP EVENTS</h1>

      <div class="row text-center text-lg-left">

        
       


        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Antr.PNG" alt="">
            <h3 class="MrBody">1. Antakshari</h3>
            <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">

            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Bart.JPG" alt="">
            <h3 class="MrBody">2. Blind Art</h3>
             <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Debate.png" alt="">
            <h3 class="MrBody">3. Debate</h3>
              <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Fshow.JPG" alt="">
             <h3 class="MrBody">4. Fashion Prade</h3>
             <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Fpaint.JPG" alt="">
              <h3 class="MrBody">5. Face Painting</h3>
              <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Gc.jpg" alt="">
              <h3 class="MrBody">6. Gully Cricket</h3>
             <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
           <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Quiz.JPG" alt="">
             <h3 class="MrBody">7. Quiz</h3>
              <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>

         <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images/event/Cultural/Rock_Band.png" alt="">
            <h3 class="MrBody">8. Rock Band</h3>
             <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
              <label class="image-checkbox" title="England">
            <img class="img-fluid img-thumbnail" src="images\event\cr.jpg" alt="">
            <h3 class="MrBody">9. Tug of War</h3>
             <input type="checkbox" name="team[]" value="england"  />
          </a>
        </div>
        

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-12 bg-dark">
      <div class="container">
       
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
