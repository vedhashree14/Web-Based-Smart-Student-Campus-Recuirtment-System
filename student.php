<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
		body
{
background-image:url('https://images.all-free-download.com/images/graphiclarge/blue_abstract_background_310971.jpg');
	background-repeat:no-repeat;
	background-size:cover;		
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.navbar-default
{
	background-color: #82CAFF;
}
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
#border 
{
	border-style: dotted;
}
img 
{
	border-radius: 20px;
}
</style>
</head>
<header>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="form.php"><img style="height:90px; width:100px;border-radius: 30px;" src="https://3.imimg.com/data3/NR/KQ/MY-2684260/perfect-job-training-250x250.jpeg"></a>
        <center><h5 style="font-size:20px; color:#00008B;"><i>CAMPUS RECRUTMENT SYSTEM</i></h5></center>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        

            <li class="dropdown" id = "old">
            <a class="dropdown-toggle" data-toggle="dropdown" color="#00008B" href="#" ><span class="glyphicon glyphicon-user"  id="wuser"><font color="#00008B"><?php echo include "name.php" ?></font></span>
            <span class="caret" ></span>
            </a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color:#82CAFF ; border-radius:20px;  " id="border">
              <li><a href="form.php" id="form.php" style="color:#00008B;">Create Resume</a></li>
              <li><a href="view.html" id="view.html" style="color:#00008B;">View Resume</a></li>
              <li><a href="studentdetails.php" id="details.php" style="color:#00008B;">Form</a></li>
              <li><a href="res5.php" id="details.php" style="color:#00008B;">Not placed Click here for job description</a></li>
              <li><a href="res6.php" id="details.php" style="color:#00008B;">placed Click here for job description</a></li>
              <li><a href="dashboard.html" id="view.html" style="color:#00008B;">Logout</a></li>
            </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<body>



<div class="slideshow-container" style="margin-top: 200px; border-radius: 20px; border:2px solid  blue;">

<div class="mySlides fade" style="">
 
  <img src="cbit1.jpeg" style="width:100%">
</div>



<div class="mySlides fade">
  
  <img src="cbit3.jpeg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 