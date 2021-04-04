<?php

include("connection.php");
$email=$_GET['email'];
$query="SELECT first_name,last_name FROM boarder WHERE  email='$email' ; ";
$result=mysqli_query($connection,$query);

while ($res=mysqli_fetch_array($result)) {
	$data[]=$res;
	
}

print(json_encode($data));

 








 ?>