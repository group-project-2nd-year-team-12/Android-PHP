<?php 

include("connection.php");


$request_id=$_POST["request_id"];

$query="UPDATE request SET  isAccept=1 WHERE request_id='$request_id';";
$result=mysqli_query($connection,$query);
if ($result) {
	echo "Successfully";
}else{
	echo "Query Failed";
}

 ?>