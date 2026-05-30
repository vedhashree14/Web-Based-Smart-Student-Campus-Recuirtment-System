<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style2.css">
 <script src='bootbox.min.js'></script>

        <script src='script1.js' type='text/javascript'></script>
  <style type="text/css">
  body
  {

background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUE3bQHtV-N_3j4h4m8nzCys9tU2h3vbICsg&usqp=CAU');
  background-repeat:no-repeat;
  background-size:cover;    

  }
  td
  {
    background: #2916F5;
    padding: 14px;
    border-radius: 5px;
color: white;
border-color: #00008B;
  }
  th 
  {
     
    padding: 14px;
    border-radius: 5px;

border-color: #00008B;
  }
  .navbar-default
{
    background-color: #82CAFF;
}
  th 
  {
    border-radius: 5px;
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
          <li><a href="placement1.php"  style="color: #00008B">Details</a></li>
          <li><a href="company_mail.php" style="color: #00008B">Company Mail</a></li>
        <li><a href="send.php" style="color: #00008B">Not Placed</a></li>

            <li><a href="send1.php" style="color: #00008B">Placed</a></li>
            <li><a href="dashboard.html" style="color:#00008B;">Logout</a></li>

            
        </ul>
      </div>
    </div>
  </nav>
</header>
<body>


<center><table width="80%" border="2" style="margin-top: 20%;border-color: #00008B; border-radius: 20px;">
    <tr>
    <!-- <td>ID</td> -->
    <td>Name</td>
    <td>Role</td>
    <td>CTC</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Eligibility Criteria</td>
   
    <td>View</td>
    <td>Operation</td>
    </tr>
    <?php
    include_once('connection.php');
 $sql="SELECT * FROM company1";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
           <th><?php  $id=$row['id'] ?></th>
        <th><?php echo $name=$row['name'] ?></th>
        <th><?php echo $role=$row['role'] ?></th>
        <th><?php echo $ctc=$row['ctc'] ?></th>
        <th><?php echo $email=$name=$name=$row['email'] ?></th>
        <th><?php echo $phone=$name=$row['phone'] ?></th>
        <th><?php echo $eligibility=$row['eligibility'] ?></th>
       
        <th><a href="uploads/<?php echo $file=$row['file'] ?>" target="_blank">view file</a></th>
           <th align='center'><button class='delete btn btn-danger' style="background-color: #00008B;color:white;" id='del_<?= $id ?>' data-id='<?= $id ?>'><font color="white">Delete</font></button></th>
        </tr>
        <?php
 }
 ?>
</table></center>
</body>
</html>