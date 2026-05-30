<?php

include 'connection.php';
if(isset($_POST['done'])){
  $id=$_GET['id'];
  $name=$_POST['name'];
  $q="UPDATE `personall` set pid=$id, name='$name' where pid=$id ";
    
    $query =mysqli_query($conn,$q);
    header('location:studentd.php');
}

?>
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

background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUE3bQHtV-N_3j4h4m8nzCys9tU2h3vbICsg&usqp=CAU');
  background-repeat:no-repeat;
  background-size:cover;    

  }
  </style>
</head>
<body>
    <div class="col-lg-6 m-auto">
    <form method="post">
     <br><br><div class="container" style="margin-top: 25%;">
        
          
          <h5 style="color="#00008B>Name</h5>
          <input type="text" style="border-color: #00008B;" name='name' class='form-control'>
      
<br>
          <button class="btn btn-success" style="border-color: #00008B;color:white; background-color: #00008B;" type="submit" name="done">SUBMIT</button><br>
     </div>
    </form>
    </div>
</body>
</html>