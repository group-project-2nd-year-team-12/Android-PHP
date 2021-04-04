<?php 

include('connection.php');
$email=$_GET['username'];
//$order_id=$_GET['order_id'];

$query="SELECT
          food_request.address,
          food_request.shedule,
          food_request.restaurant,
          food_request.order_id,
          food_request.total,
          food_request.time,
          food_request.method
          FROM 
          food_request,
          order_item 
          WHERE 
          food_request.order_id=order_item.order_id 
          AND   food_request.email='$email' 
          AND food_request.is_accepted=0 
          ORDER BY time ASC;";
$result=mysqli_query($connection,$query);

while ($res=mysqli_fetch_array($result)) {
	$data[]=$res;
	
}

print(json_encode($data));

 
 ?>