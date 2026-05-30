<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css"  href="personal1.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style type="text/css">
.navbar-default
{
	background-color: #82CAFF;
}
.head{
	width:100%;
	background-color: #00008B;
	height: 90px;
	border-radius: 20px 20px 0 0;
}
.main{
	width:30%;
	height:650px;
	background-color:#82CAFF ;
    margin:50px 35%;
    border-radius:20px 20px 30px 30px;
}
.name{
	font-size:16px;
	color:#00008B;
	margin:15px 0 0 5%;
	
}
body
{
	background-image:url('https://images.all-free-download.com/images/graphiclarge/blue_abstract_background_310971.jpg');
	background-repeat:no-repeat;
	background-size:cover;	
}
input
{
	border-radius: 20px;
}
.sub:hover{
	background-color:#82CAFF;
	color:#fff;
}
.sub{
	width:90%;
	height:40px;
	margin:15px 0 0 5%;
	font-size: 16px;
	border:1px solid rgb(17,67,107);
    background-color:#00008B;
    color :#fff;
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
				

					  <li class="dropdown" id = "old">
						<a href="form.php"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B;color:white;">LOGOUT</button></font></span>
						
						</a>
						
						</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<body>
	
	<div class="wrapper f1" style="margin-top: 90px;">
		<div class="main">
			<div class="head"><p>Personal Details</p></div>
			<div class="form f1">
				<form method="POST">
					<p class="name" >USER NAME <font color="red">*</font></p>
                    <p><input type="text" name="username" placeholder="User Name" class="name-inp"></p>
                   
					<p class="name">FIRST NAME <font color="red">*</font></p>
                    <p><input type="text" name="name" placeholder="First Name" class="name-inp"></p>
                    <p class="name">LAST NAME <font color="red">*</font></p>
                    <p><input type="text" name="Lname" placeholder="Last Name" class="name-inp"></p>
                    <p class="name">ADDRESS <font color="red">*</font></p>
                    <p><input type="text" name="address" placeholder="Last Name" class="name-inp"></p>
                    <p class="name">EMAIL <font color="red">*</font></p>
                    <p><input type="email" name="Email" placeholder="Last Name" class="name-inp"></p>
                    <p class="name">PHONE NUMBER <font color="red">*</font></p>
                    <p><input type="text" name="phone" placeholder="Last Name" class="name-inp"></p>
                    <input type="submit" name="reset" value="RESET" class="sub"><input type="submit" name="submit" value="SAVE" class="sub"> 
                    	

				</form>
			</div>
		</div>
	</div>
	
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
$name=$_POST['name'];
$lname=$_POST['Lname'];
$address=$_POST['address'];
$email=$_POST['Email'];
$phone=$_POST['phone'];


$insertquery="INSERT INTO personall(username,name,lname,address,email, phone)
 VALUES ('$username','$name','$lname','$address','$email','$phone')";
 $res=mysqli_query($conn,$insertquery);
 if($res)
 {
 	?>

 	<script>
 		alert("REQUIREMENTS SUBMITTED sucessefully");
 	</script>
 	<?php
 }
 else
 {
 	?>
 	<script>
 		alert("data not inserted properly");
 	</script>
 	<?php
 }

}

?>