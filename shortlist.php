<!DOCTYPE html>
<html>
<head>
	<title></title>
 <script>
  function validation() {
    var cgpa = document.forms["RegForm"]["cgpa"];
    var placed = document.forms["RegForm"]["placed"];
  
    if (cgpa.value == "") {
      window.alert("Please enter cgpa");
      cgpa.focus();
      return false;
    }
    if (placed.value == "") {
      window.alert("Please enter valid placement status.");
      placed.focus();
      return false;
    }
       
    return true;
  }
</script>
</head>
<header>
  <a href="placement1.php"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B;color: white;margin-left: 1200px;">LOGOUT</button></font></span></a>
</header>
<body>
  <center>
  <form method='POST' action='' name="RegForm"  onsubmit="return validation()">
<fieldset>
  <legend style="color:#00008B"><i>Shortlisting of Students</i></legend>
	<label style="color:#00008B">CGPA <font color="red">*</font></label>
	<input type='float' name='cgpa' class='form-control' style="width:10%;border-radius: 20px;border-color: #00008B;">
  <label style="color:#00008B">placement Status <font color="red">*</font></label>
  <input type='text' name='placed' class='form-control' style="width:10%;border-radius: 20px;border-color: #00008B;" ><br>
    <button type="submit" style="border-radius: 20px;border-color: #00008B;background-color: #00008B;color:white;"  name="done">SUBMIT</button>
    </fieldset>
  </form>
  </center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style type="text/css">
        body
{
background-image:url('https://images.all-free-download.com/images/graphiclarge/blue_abstract_background_310971.jpg');
  background-repeat:no-repeat;
  background-size:cover;    
}
  </style>
  
</head>

<body>
<div class="container">
<div class="col-lg-12">
<br>
<h3 class="text-warning text-center" ><font color="#00008B">SHORTLISTED STUDENTS</font></h3>
<br>

<table  border="2" style="width:100%;border-color:#00008B;">
<tr class="bg-primary text-white text-center" >

<th> First Name</th>
<th> Last Name </th>
<th> USN </th>
<th>CGPA</th>
<th> Phone Number </th>
<th> Email</th>
<th>Status</th>
</tr >
<?php
         include 'connection.php';
         if(isset($_POST['done'])){
  
        $cgpa=$_POST['cgpa'];
        $placed=$_POST['placed'];
        $q="select * from resume1 where cgpa>=$cgpa and placed='$placed'";
        $query =mysqli_query($conn,$q);
 while($res=mysqli_fetch_array($query)){

?>
<tr class="text-center">
 
<td> <?php echo $res['fname']; ?> </td>
<td> <?php echo $res['lname']; ?> </td>
<td>  <?php echo $res['roll']; ?></td>
<td>  <?php echo $res['cgpa']; ?></td>
<td> <?php echo $res['phone']; ?> </td>
<td> <?php echo $res['email']; ?> </td>
<td> <?php echo $res['placed']; ?> </td>

</tr>

<?php
          }}
?>

</tr>
</table>
</div>
</div>    
</body>
</html>
