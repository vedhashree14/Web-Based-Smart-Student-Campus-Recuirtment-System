<?php
include 'connection.php';

$id=$_GET['id'];

$q="DELETE FROM `resume1` WHERE id=$id";

mysqli_query($conn,$q);

header('location:placement1.php');

?>