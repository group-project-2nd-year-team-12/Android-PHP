<?php

include("connection.php");
$email=$_GET['username'];

$query="SELECT * FROM boarder WHERE user_accepted=1 AND email='$email';";
$result=mysqli_query($connection,$query);

while ($res=mysqli_fetch_array($result)) {
	$data[]=$res;
	# code...
}

print(json_encode($data));

 








 ?>