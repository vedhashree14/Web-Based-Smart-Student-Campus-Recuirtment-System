<!DOCTYPE HTML>
<html> 
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="registration.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script>
	function validation() {
    const repeatingPairPattern = /(.)(.)\1\2/i; 
		var user = document.forms["RegForm"]["user_id"];
		var name = document.forms["RegForm"]["name"];
		var password = document.forms["RegForm"]["password"];
		var email = document.forms["RegForm"]["email"];
		var phone = document.forms["RegForm"]["phone"];
	
		if (user.value == "") {
			window.alert("Please enter your user_id.");
			user.focus();
			return false;
		}

    if (repeatingPairPattern.test(user.value)) {
      window.alert("User ID cannot contain the same two-character sequence consecutively");
      user.focus();
			return false;
    }

    
    if (user.value.length < 10 || user.value.length > 10) {
      window.alert("User ID should be 10 characters long.");
      user.focus();
			return false;
    }
    

		if ( name.value == "") {
			window.alert("Please enter your name.");
			 name.focus();
			return false;
		}

		if (password.value == "") {
			window.alert(
			"Please enter a password.");
			password.focus();
			return false;
		}
		if (email.value == "") {
			window.alert("Please enter a valid email id");
			email.focus();
			return false;
		}

		if (phone.value == "") {
			window.alert(
			"Please enter your  number.");
			phone.focus();
			return false;
		}
        else
        {
        	window.alert("Registerd successfully")
        }
		return true;
	}
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
  <style type="text/css">
    body
{
background-image:url('https://media.istockphoto.com/photos/light-blue-paper-texture-background-picture-id1303637923?b=1&k=20&m=1303637923&s=612x612&w=0&h=iwLb9ARrRFooPmT5Bp2Gq2iX22AbVGIVpRrJFd2Bvl4=');
  background-repeat:no-repeat;
  background-size:cover;    
}
    footer {
  text-align: center;
  padding: 3px;
  background-color: #343a40!important;
  color: white;
}
.fa {  
  padding: 10px;  
margin:5px 2px;
  
  font-size: 30px;  
  width: 50px;  
}  
.fa-facebook {  
  background: #3B5998;  
  color: white;  
}  
.fa-twitter {  
  background: #55ACEE;  
  color: white;  
}  
.fa-pinterest {  
  background: #cb2027;  
  color: white;  
}  
.fa-linkedin {  
  background: #007bb5;  
  color: white;  
}  
.fa-instagram {  
  background: green;  
  color: green;  
}  
.fa-youtube {  
  background: #bb0000;  
  color: white;  
}  
.fa-google {  
  background: #dd4b39;  
  color: white;  
}  
.fa-snapchat-ghost {  
  background: #fffc00;  
  color: white;  
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;  
}  
.fa-skype {  
  background: #00aff0;  
  color: white;  
}  
.fa:hover {  
    opacity: 0.9;  
}  

.password-box {
  position: relative;
  width: 100%;
}

.password-box input {
  width: 100%;
  padding-right: 40px; /* space for eye icon */
  height: 45px;       /* adjust for your UI */
  border-radius: 30px; /* match your theme */
  padding-left: 15px;
}

.password-box .toggle-password {
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  font-size: 20px;
  color: black;
}


  </style>
</head> 
<header>
	
</header>
<body>
<center>
  <fieldset style="border:solid 2px;border-color:  #00008B;">
	<form action="" method="post" name="RegForm"  onsubmit="return validation()"> 
  <legend  style="color: #00008B;  font-size: 40px;" align="center" >Welcome to Registration</legend>
  <label>USERID <font color="red">*</font></label><br>
  <input type="text" name="user_id"  pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{10}$"


        title="User_id should  contain both letters and numbers ,it should contain only 10 space"><br><br>
  <label >NAME <font color="red">*</font></label><br>
  <input type="text" name="name" pattern="[a-z]{1,30}"
        title="Username should only contain lowercase letters. e.g. john"><br><br>
  <label >PASSWORD <font color="red">*</font></label><br>
   <input type="password" id="password" name="password"  
   title="Password must include at least 1 letter, 1 number, and 1 special character, and be 8–16 characters long."
       pattern= "^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,16}$"   required/>
       <div class="password-box">
  <span class="toggle-password" onclick="togglePassword()">
    <i id="eyeIcon" class="fa fa-eye"></i>
  </span>
</div>
<br><br>
       
  <label >EMAIL <font color="red">*</font></label><br>
   <input type="email" name="email" ><br><br>
  <label >PHONE <font color="red">*</font></label><br>
  <input type="phone" id="phone" name="phone" pattern="^\d{10}$"><br><br>
  <br><br>
   <input type="submit" name="submit" class="btn" value="Register"  style="background-color: #00008B; border: 1px solid #00008B; color:white;">
   <input type="reset" name="reset" class="btn" value="Reset" style="margin-left: 5px;background-color: #00008B; border: 1px solid #00008B; color:white;">
   <div class="container signin">
<p>Already have an account? <a href="slogin.php">Login</a>.</p>
</div>
 </fieldset>
</form>
</center>
<script>
    // Show / Hide Password Toggle Function
    function togglePassword() {
      const password = document.getElementById("password");
      const eyeIcon = document.getElementById("eyeIcon");

      if (password.type === "password") {
        password.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        password.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    }
  </script>
</body>

 </center>
</html>

<?php 
include 'connection.php'; // Database connection

if(isset($_POST['submit'])){
  $us = $_POST['user_id'];
  $na = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  

  // Insert record
  $insert_query = "INSERT INTO 
       register(user_id,name,password,email,phone) 
                 VALUES('".$us."','".$na."','".$password."','".$email."','".$phone."')";
  mysqli_query($conn,$insert_query);

  // Redirect to another page
  
}

?>

