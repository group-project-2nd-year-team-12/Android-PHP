<?php

include("connection.php");
$F_post_id=$_GET['F_post_id'];
$query="SELECT * FROM product WHERE  F_post_id=$F_post_id AND lunch=1; ";
$result=mysqli_query($connection,$query);

while ($res=mysqli_fetch_array($result)) {
	$data[]=$res;
	
}

print(json_encode($data));

 








 ?>