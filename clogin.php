<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="slogin.css">
  <script>
  function validation() {
    var name = document.forms["RegForm"]["name"];
    var user = document.forms["RegForm"]["user_id"];
    var password = document.forms["RegForm"]["password"];
  
    if (name.value == "") {
      window.alert("Please enter your name.");
      name.focus();
      return false;
    }
    if (user.value == "") {
      window.alert("Please enter your user_id.");
      user.focus();
      return false;
    }


    if (password.value == "") {
      window.alert(
      "Please enter a password.");
      password.focus();
      return false;
    }
       
    return true;
  }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
  <style type="text/css">
    footer {
  text-align: center;
  padding: 3px;
  background-color: #343a40!important;
  color: white;
}
legend
{
  font-size: 40px;
  color: #00008B;
}
.btn 
{
  background-color: #00008B;
  color: white;
}
fieldset
{
  border-radius: 80px 80px 0 0;
  border-color: #00008B;
}
body
{
  background-image:url('https://images.all-free-download.com/images/graphiclarge/blue_abstract_background_310971.jpg');
  background-repeat:no-repeat;
  background-size:cover;  
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
input
{
  border-color: #00008B;
}
.fa:hover {  
    opacity: 0.9;  
}  
</style>
</head>
<body>
 
   <a href="dashboard.html"><button style=" height:30px;border-radius: 30px;color: white; width:100px;background-color: #00008B;margin-left: 1200px;">LOGOUT</button></font></span></a>
<center>
	<form action="" method="POST" name="RegForm"  onsubmit="return validation()" > <fieldset style="height: 500px;width:80%;border-color: #00008B;"><legend align="center">Welcome to Login</legend>
  <label>USERNAME <font color="red">*</font></label><br>
  <input type="text" name="name" style="height: 50px;width:50%"  pattern="[a-z]{1,30}"
        title="User_id should only contain numbers " ><br><br>
  <label>USERID <font color="red">*</font></label><br>
  <input type="text" style="height: 50px;width:50%" name="user_id"  pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{10}$"
        title="User_id should only contain numbers " ><br><br>
  <label >PASSWORD <font color="red">*</font></label><br>
   <input type="password" style="height: 50px;width:50%" name="password"  title="Password must contain: Minimum 8 characters atleast 1 Alphabet  and 1 Number"
     pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,16}$" /><br><br>
   <input type="submit" style="height: 50px;width:50%" name="submit" value="LOGIN" class="btn">
  <h5>If  You Dont Have an Account Please <a href="companyreg.php">Register Here</a></h5>
 </fieldset>
</form>
</center>
</body>

</html>
<?php
session_start();
include_once 'connection.php';

if(isset($_SESSION['user'])!="")
{
  header("Location: homepage.html");
}

if(isset($_POST['submit']))
{
  
   $name=$_POST['name'];
  $user_id=$_POST['user_id'];
  $password=$_POST['password'];
  $res=mysqli_query($conn,"SELECT * FROM creg WHERE  user_id='$user_id' && name='$name'");
  $row=mysqli_fetch_array($res);
  if ($row == null) {
      echo "<script>alert('INVALID LOGIN');</script>";
  }
  else
  {
  if($row['password'] == $password && $row['user_id'] == $user_id)
  {
    // $_SESSION['user_id']=$row['user_id'];
      echo "<script>alert('LOGIN');</script>";
       header("Location: c.php");
  }
}
mysqli_close($conn);
}
?>