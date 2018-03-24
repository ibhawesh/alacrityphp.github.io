<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>SIEM | ALACRITY</title>
<link href='https://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Michroma' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
</head>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('images/AA.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}


</style>


<style>

@import url(https://fonts.googleapis.com/css?family=Raleway);



/* Buttons styles */
input::-moz-focus-inner,
button::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input[type="submit"].btn,
button.btn {
	cursor: pointer;
}

a.btn,.btn {
  margin-right: 1em; /* remove this while use*/
  margin-bottom: 1em; /* remove this while use*/
	display: inline-block;
	outline: none;
	*zoom: 1;
	text-align: center;
	text-decoration: none;
	font-family: inherit;
	font-weight: 300;
	letter-spacing: 1px;
	vertical-align: middle;
	border: 1px solid;
	transition: all 0.2s ease;
	box-sizing: border-box;
	text-shadow: 0 1px 0 rgba(0,0,0,0.01);
}
/* Radius */
.btn-radius {
  border-radius: 3px;
}
/* Sizes */


.btn-large {
	font-size: 1.0625em;
	padding: 0.5625em 1.5em;
}

/* Colors */
.btn-green {
	color: #fff;
	border-color: white;
}


.btn-blue {
	color: #fff;
	border-color: #4682B4;
}
.btn-blue:hover {
  background: #4682B4;
  color: #fff;
  border-color: #fff;
}
.cFont{

   font-family: 'Pompiere';font-size: 22px;
}
.alaFont{
  font-family: 'Nosifer';font-size: 55px;
}
.siemFont
{
font-family: 'Michroma';font-size: 22px;
}

</style>

<body>

<div class="bgimg">
  <div class="topleft">
    <p></p>
  </div>
  <div class="container">
  <div class="middle">
     <P class="siemFont"><B>SIEM WELCOMES YOU TO</B><P>
    <h1 class="alaFont">ALACRITY </h1>
    <H2 siemFont>2K18</H2><hr>
      <P ><B>ON 12TH & 13TH OF APRIL</B><P>
      <p class="cFont">Get ready to be thirlled. We come up with many exciting events.</br> Join us and enjoy...</p>



    <p id="demo" style="font-size:20px"></p>
  	  <a class="btn btn-large btn-blue"  href="alacrity.html">Explore</a>
  </div>
</div><!--container -->
  <div class="bottomleft">
    <p></p>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 11, 2018 10:00:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>
