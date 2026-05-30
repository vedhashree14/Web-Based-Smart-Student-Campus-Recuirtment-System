<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
	<link rel="stylesheet" type="text/css" href="student1.css">
	
		<script>
	function validation() {
    const repeatingPairPattern = /(.)(.)\1\2/i; 
		var fname = document.forms["RegForm"]["fname"];
		var lname = document.forms["RegForm"]["lname"];
    

		if ( fname.value == "") {
			window.alert("Please enter your name.");
			 fname.focus();
			return false;
		}

		if (lname.value == "") {
			window.alert(
			"Please enter a password.");
			lname.focus();
			return false;
		}
        else
        {
        	window.alert("Registerd successfully")
        }
		return true;
	}

	function validation() {
  const fname = document.forms["RegForm"]["fname"].value;
  const lname = document.forms["RegForm"]["lname"].value;
  const username = document.forms["RegForm"]["username"].value;
  const roll = document.forms["RegForm"]["roll"].value;
  const phone = document.forms["RegForm"]["phone"].value;
  const cgpa = document.forms["RegForm"]["cgpa"].value;

  if (!/^[A-Za-z]+$/.test(fname)) { alert("First name must contain only alphabets"); return false; }
  if (!/^[A-Za-z]+$/.test(lname)) { alert("Last name must contain only alphabets"); return false; }
  if (!/^[A-Za-z]+$/.test(username)) { alert("Username must contain only alphabets"); return false; }
  if (!/^[A-Za-z0-9]{10}$/.test(roll)) { alert("Roll number must be 10 characters (letters + numbers)"); return false; }
  if (!/^\d{10}$/.test(phone)) { alert("Phone number must be exactly 10 digits"); return false; }
  if (!/^[0-9]*\.?[0-9]+$/.test(cgpa)) { alert("CGPA must contain only numbers"); return false; }

  return true;
}

</script>

</head>

<header><a href="student.php"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B;color: white;margin-left: 1400px;">LOGOUT</button></font></span></a></header>
<body>
	<div class="regform"><h1><font color="#00008B">Student Details</font></h1></div>
	<div class="main">
		<form method="POST" name="RegForm" action="" enctype="multipart/form-data" onsubmit="return validation()">
			<div id="name">
		<h2 class="name">Name</h2>
<input type="text" class="firstname" name="fname" placeholder="firstname"
       pattern="[A-Za-z]+" title="Only alphabets allowed" required>

<input type="text" class="lastname" name="lname" placeholder="lastname"
       pattern="[A-Za-z]+" title="Only alphabets allowed" required>

<h2 class="Roll">Roll Number</h2>
<input type="text" class="roll" name="roll"
       pattern="[A-Za-z0-9]{10}" title="Roll number must be exactly 10 characters (letters + numbers)" required>

<h2 class="Phone">Phone</h2>
<select class="phone" name="country">
  <option>+91</option><option>+92</option><option>+93</option>
  <option>+94</option><option>+95</option>
</select>
<input type="text" class="number" name="phone"
       pattern="\d{10}" title="Phone number must be exactly 10 digits" required>

<h2 class="Cgpa">CGPA</h2>
<input type="text" class="age" name="cgpa"
       pattern="^(10(\.00?)?|[0-9](\.[0-9]{1,2})?)$"
       title="Enter CGPA between 0 and 10 with up to 2 decimal places (e.g. 7, 7.5, 8.25)"
       required>


<h2 class="E-mail">E-mail</h2>
<input type="email" class="email" name="email" placeholder="e.g. zzzz@gmail.com" required>

<h2 class="E-mail">User Name</h2>
<input type="text" class="number" name="username" placeholder="enter user name"
       pattern="[A-Za-z]+" title="Only alphabets allowed" required>

  		<h2 class="Resume">Upload Resume</h2>
  		<input type="file" class="resume"  name="file"><br><br>
  		<button type="submit" name="btn-upload" style="background-color: #00008B; width:90px;height:40px;color:white; border-radius: 20px; margin-left: 45%;">upload</button>
  	</div>
</form>
</body>
</html>
<?php
include_once 'connection.php';
if(isset($_POST['btn-upload']))
{ 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$roll=$_POST['roll'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$cgpa=$_POST['cgpa'];
$email=$_POST['email'];
$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $username=$_POST['username'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
$insertquery="INSERT INTO resume1(fname,lname,roll,age,gender,phone,cgpa,email,placed,file,type,size,username) values('$fname','$lname','$roll','$age','$gender','$phone','$cgpa','$email','NO','$file','$file_type','$file_size','$username')";
$res=mysqli_query($conn,$insertquery);
if($res){
	header("Location:student.php?status=success");
	
}
else{
	header("Location:studentdetails.php?status=fail");
}
}
?>
