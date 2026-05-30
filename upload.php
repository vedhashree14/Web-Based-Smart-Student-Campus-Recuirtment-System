<?php
include_once 'connection.php';
if(isset($_POST['btn-upload']))
{ 
$company=$_POST['name'];   
$des=$_POST['desc'];
$cgpa=$_POST['cgpa'];
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO student2(company,des,cgpa,file,type,size) VALUES('$company','$des','$cgpa','$file','$file_type','$file_size')";
 mysqli_query($conn,$sql); 
}
?>
