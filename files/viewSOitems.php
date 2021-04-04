<?php

include("connection.php");
$order_id=$_GET['order_id'];

//SELECT product.image,order_item.item_name,order_item.quantity FROM food_request,product,order_item WHERE food_request.F_post_id=product.F_post_id AND food_request.order_id=order_item.order_id AND order_item.order_id='1609939764' AND order_item.item_name="Cheese Kottu"

$query="SELECT * FROM order_item WHERE order_id='$order_id'; ";
$result=mysqli_query($connection,$query);

while ($res=mysqli_fetch_array($result)) {
	$data[]=$res;
	
}

print(json_encode($data));

 








 ?>