<?php 
    include "connection.php";
?>
<!doctype html>
<html>
    <head>
        <title>Confirmation alert Before Delete record with jQuery AJAX</title>
        <link href='style.css' rel='stylesheet' type='text/css'>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js'></script> 
        <script src='bootbox.min.js'></script>

        <script src='script.js' type='text/javascript'></script>
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
        <a href="placement1.php"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B; color: white;margin-left: 1200px;">LOGOUT</button></font></span></a>
        <button class="btn-success btn" onclick="window.location.href='shortlist.php';" style="background-color: #00008B;margin-left:217px;" ><font>SHORTLIST</font></button><br><br><br>
        <div class='container'>
            <table border='1' class='table' >
                <tr class="bg-primary text-white text-center" >

    
      
     <td style="background-color: #2916F5; color:white;">First Name</td>
      <td style="background-color: #2916F5; color:white;">Last Name</td>
       <td style="background-color: #2916F5; color:white;">Roll</td>
        <td style="background-color: #2916F5; color:white;">Phone</td>
         <td style="background-color: #2916F5;color:white;">Email</td>
          <td style="background-color: #2916F5; color:white;">Placed</td>
   
    <td style="background-color: #2916F5; color:white;">Resume</td>
    <td colspan="2" style="background-color: #2916F5; color:white;">Operations</td>
    
    </tr>

                <?php 
                $query = "SELECT * FROM resume1";
                $result = mysqli_query($conn,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    ?>
                     <tr>
 <?php  $id = $row['id'];?> 
<td> <?php echo $fname=$row['fname']; ?> </td>
<td> <?php echo $lname=$row['lname']; ?> </td>
<td>  <?php echo $roll=$row['roll']; ?></td>
<td> <?php echo $phone=$row['phone']; ?> </td>
<td> <?php echo $email=$row['email']; ?> </td>
<td> <?php echo $placed=$row['placed']; ?> </td>
<td><a href="uploads/<?php echo $file=$row['file'] ?>" target="_blank">view file</a></td>

                        
                        <td align='center'><button class='delete btn btn-danger' style="background-color: #00008B;color:white;" id='del_<?= $id ?>' data-id='<?= $id ?>'><font color="white">Delete</font></button></td>
                        <td> <button class="btn-primary btn" style="background-color: #00008B;color:white;"><a href="p1_update.php?id=<?php echo $row['id']; ?>" class="text-white"><font color="white">Update</a></button>  </td></center>
                
                   
                <?php
                    $count++;
                }
                ?>
            </table>
        </div>
    </body>
</html>