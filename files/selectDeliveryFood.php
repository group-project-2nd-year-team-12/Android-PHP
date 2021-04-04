<?php

include("connection.php");
$email=$_GET['username'];

$query="SELECT 
        food_request.order_id,
        food_request.time,
        food_request.shedule,
        food_request.first_name,
        food_request.address,
        food_request.order_type,
        food_request.restaurant,
        food_request.phone,
        food_request.total,
        food_request.method 
        FROM 
        food_request,
        food_post,
        food_supplier 
        WHERE 
        food_request.F_post_id=food_post.F_post_id 
        AND food_post.FSid=food_supplier.FSid 
        AND food_supplier.email='$email' 
        AND food_request.term='shortTerm' 
        AND food_request.is_accepted=3 
        ORDER BY time ASC";
//$query="SELECT * FROM food_request WHERE term='shortTerm' AND is_accepted=1  ORDER BY time DESC ; ";
$result=mysqli_query($connection,$query);

while ($res=mysqli_fetch_array($result)) {
	$data[]=$res;
	
}

print(json_encode($data));

 








 ?>