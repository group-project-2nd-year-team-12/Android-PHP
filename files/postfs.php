<?php 

include("connection.php");

$email=$_GET['email'];

$query="SELECT
 food_post.FSid, food_post.ad_title,food_post.address,food_post.rating,food_post.lifespan,food_post.post_amount,food_post.image FROM food_post,food_supplier WHERE food_post.FSid=food_supplier.FSid AND food_supplier.email='$email';";

 $res=mysqli_query($connection,$query);

   while ($result=mysqli_fetch_array($res)) {
	$data[]=$result;
}
print(json_encode($data));
 ?>