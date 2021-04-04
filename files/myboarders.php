<?php 
include("connection.php");
$email=$_GET['username'];
$query="SELECT 
 
   boarder.email,
   boarder.first_name,
   boarder.last_name,
   boarder.profileimage, 
   boarder.institute,
   boarder.gender,
   boarder.telephone,
   boarding_post.city 
   FROM 
   confirm_rent,
   boarder,
   boardings_owner,
   boarding_post 
   WHERE 
   confirm_rent.Bid=boarder.Bid 
   AND confirm_rent.BOid=boardings_owner.BOid 
   AND confirm_rent.B_post_id=boarding_post.B_post_id 
   AND confirm_rent.is_paid=1 
   AND boardings_owner.email='$email';";

   $res=mysqli_query($connection,$query);

   while ($result=mysqli_fetch_array($res)) {
	$data[]=$result;
}
print(json_encode($data));


    ?>