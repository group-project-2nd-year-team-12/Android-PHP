<?php 

include("connection.php");

$email=$_POST["email"];


$query="UPDATE food_supplier SET  available=1 WHERE email='$email';";
$result=mysqli_query($connection,$query);
if ($result) {
	echo "Successfully";
}else{
	echo "Query Failed";
}

 ?>