<?php 
include "connection.php";

if(isset($_POST['id'])){
	$id=  $_POST['id'];

	$sql = "DELETE FROM resume1 WHERE id=".$id;
	mysqli_query($conn,$sql);
	echo 1;
	exit;
}

echo 0;
exit;