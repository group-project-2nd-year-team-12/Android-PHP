<?php 

include("connection.php");

$email=$_POST["email"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$institute=$_POST["institute"];
$telephone=$_POST['telephone'];

$query="UPDATE boarder SET  first_name='$first_name',last_name='$last_name', institute='$institute',telephone='$telephone' WHERE email='$email';";
$result=mysqli_query($connection,$query);
if ($result) {
	echo "Successfully";
}else{
	echo "Query Failed";
}

 ?>