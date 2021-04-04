<?php 
include("connection.php");
$query="SELECT * FROM food_post WHERE type IN('Both','Short Term') ;";
$res=mysqli_query($connection,$query);

while ($result=mysqli_fetch_array($res)) {
	$data[]=$result;
}
print(json_encode($data));
//../resource/Images/uploaded_boarding/
 ?>