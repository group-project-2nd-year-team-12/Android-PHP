<?php 


include ("connection.php");

$email=$_GET['username'];
$query="SELECT * FROM food_supplier WHERE user_accepted=1 AND  email='$email'; ";

$result=mysqli_query($connection,$query);
while ($res=mysqli_fetch_array($result)) {
	$data[]=$res;
}
print(json_encode($data));
 ?>