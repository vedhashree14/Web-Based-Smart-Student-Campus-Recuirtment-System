<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
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
        <center><h5 style="font-size:20px;"><i>CAMPUS RECRUTMENT SYSTEM</i></h5></center>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        

            <li class="dropdown" id = "old">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser"><font color="gray"><?php echo include "name.php" ?></font></span>
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="form.php" id="form.php">Create Resume</a></li>
              <li><a href="view.html" id="view.html">View Resume</a></li>
              <li><a href="studentdetails.php" id="details.php">Form</a></li>
            </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<body>



<div class="slideshow-container" style="margin-top: 200px;">

<div class="mySlides fade">
 
  <img src="data:image/jpeg;base64,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" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="https://getmyuni.azureedge.net/college-image/big/sdm-institute-of-technology-sdmit-mangalore.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  
  <img src="https://dlithe.com/wp-content/uploads/2020/01/SDMIT-24-scaled.jpg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
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