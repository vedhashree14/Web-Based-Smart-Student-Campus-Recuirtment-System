<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style2.css">
 <style type="text/css">
    body
  {

background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUE3bQHtV-N_3j4h4m8nzCys9tU2h3vbICsg&usqp=CAU');
  background-repeat:no-repeat;
  background-size:cover;    
  }
    .navbar-default
{
    background-color: #82CAFF;
}
     input
     {
        width: 220px;
        height: 60px;
        border-radius: 15px;
        border-color: #00008B;
     }
     .resume
     {
        width: 220px;
        height: 60px;
        border-radius: 3px;
       color: red;
     }
     .butt
     {
        width: 220px;
        height: 60px;
        border-radius: 3px;
       background-color: #00008B;
       color: white;
       border-radius: 20px;
       font-size: 20px;
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
        <center><h5 style="font-size:20px;color:#00008B;"><i>CAMPUS RECRUTMENT SYSTEM</i></h5></center>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="placement1.php" style="color:#00008B;">Details</a></li>
          <li><a href="company_mail.php" style="color:#00008B;">Company Mail</a></li>
          <li><a href="send.php" style="color:#00008B;">Not Placed</a></li>
          <li><a href="send1.php" style="color:#00008B;">Placed</a></li>
          <li><a href="dashboard.html" style="color:#00008B;">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<body>
    <center>
   <legend style="margin-top:10% ;color:#00008B;"><i>Job Description for not placed students</i></legend>
	<form method='POST'   enctype="multipart/form-data">
   <label style="color: #00008B;">Company Name <font color="red">*</font></label><br>
    <input type='text' name='name'><br><br>
    <label style="color: #00008B;">Company Description <font color="red">*</font></label><br>
    <input type='text' name='desc'><br><br>
    <label style="color: #00008B;">CGPA <font color="red">*</font></label><br>
    <input type='float' name='cgpa'><br><br>
    <label style="color: #00008B;">About Company <font color="red">*</font></label><br><br>
  	<input type="file" class="resume" name="file"/><br>
  	<button type="submit" class="butt" name="btn-upload">upload</button>
  </form></center>
<!--   <form action="upload.php" method="post" enctype="multipart/form-data">

<input type="file" name="file" />
<button type="submit" name="btn-upload">upload</button>
</form> -->
</body>
</html>
<?php
include_once 'connection.php';
if(isset($_POST['btn-upload']))
{ 
$company=$_POST['name'];   
$des=$_POST['desc'];
$cgpa=$_POST['cgpa'];
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO student2(company,des,cgpa,file,type,size) VALUES('$company','$des','$cgpa','$file','$file_type','$file_size')";
 mysqli_query($conn,$sql); 
}
?>
