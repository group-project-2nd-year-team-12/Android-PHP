<?php 


include("connection.php");
$email=$_GET['email'];

$query="SELECT 
request.request_id,
request.student_email,
request.message,
request.date,
boarding_post.city,
boarding_post.image,
student.first_name
FROM 
       request,
       boarding_post,
       boardings_owner,
       student 
       WHERE 
       request.B_post_id=boarding_post.B_post_id 
       AND request.BOid=boardings_owner.BOid
       AND request.student_email=student.email 
       AND request.isAccept=0 
       AND boardings_owner.email='$email';";

       $res=mysqli_query($connection,$query);

       while ($result=mysqli_fetch_array($res)) {

       	$data[]=$result;
       }

       print(json_encode($data));
 ?>