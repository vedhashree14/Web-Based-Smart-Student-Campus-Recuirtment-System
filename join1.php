
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style type="text/css">
      body
{
   background-image:url('https://images.all-free-download.com/images/graphiclarge/blue_abstract_background_310971.jpg');
   background-repeat:no-repeat;
   background-size:cover;  
}
th,td,tr
{
   border-color: #00008B;
}
table
{
   border-color: #00008B; 
}

   </style>
</head>
<header>
   <a href="res6.php"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B; color: white;margin-left: 1200px;">LOGOUT</button></font></span></a>
</header>
<body>
<div class="container">
<div class="col-lg-12">
<br>
<h3 class="text-warning text-center" ><font color="#00008B">JOB DESCRIPTION</font></h3>
<br>

<table border="2" style="width:100%">
<tr class="bg-primary text-white text-center" >

<th><font color="#00008B">Company Name</font></th>
<th><font color="#00008B"> Description</font> </th>

<th><font color="#00008B">Company Details</font></th>
</tr >
<?php 
include('connection.php');
if(isset($_POST['submit']))
{
   $name=$_POST['name'];

$query="select resume1.id,student3.id,student3.company,student3.des,student3.file,resume1.cgpa
from resume1,student3
where resume1.cgpa>=student3.cgpa and username='$name' and placed='Yes' ";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{

	?>
	




 <tr class="text-center">
 <td> <?php echo $row['company']; ?> </td>
<td> <?php echo $row['des']; ?> </td>
<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>

</tr>


<?php

          }
      }
?>
</tr>
</table>
</div>
</div>    
</body>
</html>