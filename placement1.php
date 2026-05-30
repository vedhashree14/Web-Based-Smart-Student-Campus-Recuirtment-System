<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .navbar-default1
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
  height:300px;
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style2.css">
 <style type="text/css">
    body
  {

background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUE3bQHtV-N_3j4h4m8nzCys9tU2h3vbICsg&usqp=CAU');
  background-repeat:no-repeat;
  background-size:cover;    

  }
  .text-white
  {
    background:#00008B;
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
  <nav class="navbar navbar-default1 navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="form.php"><img style="height:90px; width:100px;border-radius: 30px;" src="https://3.imimg.com/data3/NR/KQ/MY-2684260/perfect-job-training-250x250.jpeg"></a>
        <center><h5 style="font-size:20px;color: #00008B;"><i>CAMPUS RECRUTMENT SYSTEM</i></h5></center>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="placement1.php"><font color="#00008B";>Details</font></a></li>
          <li><a href="company_mail.php"><font color="#00008B";>Company Mail</font></a></li>
        <li><a href="send.php"><font color="#00008B";>Not Placed</font></a></li>

            <li><a href="send1.php"><font color="#00008B";>Placed</font></a></li>
            <li><a href="dashboard.html" style="color:#00008B;">Logout</a></li>


            
        </ul>
      </div>
    </div>
  </nav>
</header>
<body>
<div class="container" style="margin-top: 50px;">
<div class="col-lg-12">
<br>
<h3 class="text-warning text-center">STUDENT DETAILS</h3>
<br>
<button class="btn-success btn" onclick="window.location.href='shortlist.php';" style="background-color: #00008B;" ><font>SHORTLIST</font></button><br><br>
<div class="container">
<div class="col-lg-12">
<br>
<table  border="2" style="width:100%">
<tr class="bg-primary text-white text-center" >

    
    
     <td style="background-color: #2916F5; color:white;">First Name</td>
      <td style="background-color: #2916F5; color:white;">Last Name</td>
       <td style="background-color: #2916F5; color:white;">Roll</td>
        <td style="background-color: #2916F5; color:white;">Phone</td>
         <td style="background-color: #2916F5;color:white;">Email</td>
          <td style="background-color: #2916F5; color:white;">Placed</td>
   
    <td style="background-color: #2916F5; color:white;">Resume</td>
    <td colspan="2" style="background-color: #2916F5; color:white;">Operations</td>
     <td style="background-color: #2916F5; color:white;"></td>
    </tr>
    <?php
    include_once('connection.php');
 $sql="SELECT * FROM resume1";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>

<td> <?php echo $row['fname']; ?> </td>
<td> <?php echo $row['lname']; ?> </td>
<td>  <?php echo $row['roll']; ?></td>
<td> <?php echo $row['phone']; ?> </td>
<td> <?php echo $row['email']; ?> </td>
<td> <?php echo $row['placed']; ?> </td>
<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
       <center> <td> <button class="btn-danger btn" style="background-color: #00008B;color:white;"><a href="p1_delete.php?id=<?php echo $row['id']; ?>" class="text-white"><font color="white">Delete</font></a> </button></td>
<td> <button class="btn-primary btn" style="background-color: #00008B;color:white;"><a href="p1_update.php?id=<?php echo $row['id']; ?>" class="text-white"><font color="white">Status Update</a></button>  </td></center>
        </tr>
        <?php
 }
 ?>
</table>
</div>
</div>    
</body>
</html>
</html> 