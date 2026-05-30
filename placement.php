<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="manager.css">
  <script>
  function validation() {
    var user = document.forms["RegForm"]["user_id"];
    var password = document.forms["RegForm"]["password"];
  
    if (user.value == "") {
      window.alert("Please enter your user_id.");
      user.focus();
      return false;
    }

    if(user.value !="yarab")
    {
       window.alert("Please enter valid user_id.");
      user.focus();
      return false;
    }
    if (password.value == "") {
      window.alert(
      "Please enter a password.");
      password.focus();
      return false;
    }
      if (password.value != "2025-26") {
      window.alert(
      "Please enter valid password.");
      password.focus();
      return false;
    } 
  else
  {
    window.location.href="placement1.php";
  }  
    return true;
  }
</script>
  <style type="text/css">
    footer {
  text-align: center;
  padding: 3px;
  background-color: #343a40!important;
  color: white;
}
input
{
  border-color: #00008B;
  border-radius: 20px;
}
legend
{
  font-size: 30px;
  color: #00008B;
}
fieldset
{
  border-radius: 80px 80px 0 0;
  width: 50%;
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
.fa:hover {  
    opacity: 0.9;  
}  
</style>
</head>
<body>
	<a href="dashboard.html"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B;color: white;margin-left: 1200px;">LOGOUT</button></font></span></a>
<center>

  <form action="placement1.php" method="post" name="RegForm"  onsubmit="return validation()" >
  <fieldset style="height: 400px;width:80%;border-color: #00008B;"><legend align="center">welcome to Placement Officer-login:</legend>
  <h3>USERID <font color="red">*</font></h3><br>
  <input type="text" style="height: 50px;width:50%" name="user_id"  pattern="\w+"
        title="User_id should only contain numbers " ><br><br>
  <h3 >PASSWORD <font color="red">*</font></h3><br>
   <input style="height: 50px;width:50%" type="password" name="password"   /><br><br>
   <input type="submit" name="submit" style="background-color: #00008B;color:white;height: 50px;width:50%" value="LOGIN" class="btn">
 </fieldset>
</form>
</center>
</body>
</html>
