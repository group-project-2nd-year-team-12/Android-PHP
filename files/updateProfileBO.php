<?php 

include("connection.php");

$email=$_POST["email"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$nic=$_POST["nic"];
$address=$_POST['address'];

$query="UPDATE boardings_owner SET  first_name='$first_name',last_name='$last_name', NIC='$nic',address='$address' WHERE email='$email';";
$result=mysqli_query($connection,$query);
if ($result) {
	echo "Successfully";
}else{
	echo "Query Failed";
}

 ?>