<?php 
include("connection.php");
$email=$_GET['username'];

$query="SELECT
 boarding_post.category,boarding_post.girlsBoys,boarding_post.person_count,boarding_post.image,boarding_post.description,boarding_post.review FROM boarding_post,boardings_owner WHERE boarding_post.BOid=boardings_owner.BOid AND boardings_owner.email='$email';";
$res=mysqli_query($connection,$query);

   while ($result=mysqli_fetch_array($res)) {
	$data[]=$result;
}
print(json_encode($data));
 ?>