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
</head>

<body>
<div class="container">
<div class="col-lg-12">
<br>
<h3 class="text-warning text-center">STUDENT DETAILS</h3>
<br>
<button class="btn-success btn" onclick="window.location.href='shortlist.php';">SHORTLIST</button><br><br>
<table width="80%" border="1">
    <tr>
    <td>Id</td>
     <td>First Name</td>
      <td>Last Name</td>
       <td>Roll</td>
        <td>Phone</td>
         <td>Email</td>
          <td>Placed</td>
   
    <td>Resume</td>
    </tr>
    <?php
    include_once('connection.php');
 $sql="SELECT * FROM resume1";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
<td> <?php echo $row['id']; ?> </td>
<td> <?php echo $row['fname']; ?> </td>
<td> <?php echo $row['lname']; ?> </td>
<td>  <?php echo $row['roll']; ?></td>
<td> <?php echo $row['phone']; ?> </td>
<td> <?php echo $row['email']; ?> </td>
<td> <?php echo $row['placed']; ?> </td>
<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        <td> <button class="btn-danger btn"><a href="p1_delete.php?id=<?php echo $row['id']; ?>" class="text-white">Delete</a> </button></td>
<td> <button class="btn-primary btn"><a href="p1_update.php?id=<?php echo $row['id']; ?>" class="text-white">Update</a></button>  </td>
        </tr>
        <?php
 }
 ?>
</table>
</div>
</div>    
</body>
</html>
