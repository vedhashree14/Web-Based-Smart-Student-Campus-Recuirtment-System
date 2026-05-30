<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script type="text/javascript">
    function validation() {
  
    var name = document.forms["RegForm"]["name"];
    
  

    if ( name.value == "") {
      window.alert("User Name is mandatory, Please enter your user name ");
       name.focus();
      return false;
    }

    
       
    return true;
  }
  </script>
  <style type="text/css">
        body
{
background-image:url('https://images.all-free-download.com/images/graphiclarge/blue_abstract_background_310971.jpg');
  background-repeat:no-repeat;
  background-size:cover;    
}
.btf
{
  height: 40px;
  width: 70px;
}
input
{
  height: 40px;
  width: 200px;
}
form
{
  margin-top: 10%;
}

  </style>
</head>
<header>
   <a href="student.php"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B; color: white;margin-left: 1200px;">LOGOUT</button></font></span></a>
</header>
<body>
  <center>
        <fieldset style="margin-top: 50px;width:60%;font-size: 30px;background-color:#00008B;color: white;border-radius: 100px;">ENTER YOUR USERNAME TO GET Company Detials</fieldset>
<form action="join1.php" method="post" name="RegForm"  onsubmit="return validation()" >  

  <label style="color:#00008B"><i>ENTER USERNAME <font color="red">*</font></i></label><br>
  <input style="border-color: #00008B;border-radius: 10px;" type="text" name="name" placeholder="entert yor name" 
        title="User_id should only contain numbers "class="btn"  >
   <input type="submit" class="btf" name="submit" style="background-color:#00008B;color:white;border-radius: 20px;" value="DETAILS" >
   </center>
<br><br><br><br>
</form>
</body>
</html>