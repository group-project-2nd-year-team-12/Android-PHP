<?php 

include("connection.php");
include("../model/orderModel.php");


	$email=$_POST['email'];
	$address=$_POST['address'];
	$first_name=$_POST['first_name'];
	 
    $last_name=$_POST['last_name'];
	$term=$_POST['term'];
	$order_type=$_POST['order_type'];
	$shedule=$_POST['shedule'];
	$restaurant=$_POST['title'];


	$F_post_id=$_POST['F_post_id'];
	$total=$_POST['price'];
	$phone=$_POST['phone'];
	$method=$_POST['method'];
	       
	$order_id=time().mt_rand($email);
	            
	date_default_timezone_set("Asia/Colombo");
	$time=date('Y-m-d H:i:s');
	$expireTime=date('Y-m-d H:i:s',strtotime('+20 minutes',strtotime($time)));
	$item_name=$_POST['product_name'];


$query="INSERT INTO food_request (request_id,email,address,first_name,last_name,is_accepted,term,order_type,shedule,restaurant,F_post_id,order_id,total,phone,method,time,expireTime) 
        VALUES(null,'{$email}','{$address}','{$first_name}','{$last_name}',0,'{$term}','{$order_type}','{$shedule}','{$restaurant}',{$F_post_id},'{$order_id}',{$total},'{$phone}','{$method}','{$time}','{$expireTime}') LIMIT 1";
         $result1=mysqli_query($connection,$query);

         if ($result1) {
         	 $query="INSERT INTO order_item (item_name,quantity,order_id) 
                   VALUES('{$item_name}',1,'{$order_id}')";
             $result=mysqli_query($connection,$query);

        }

 //orderModel::food_request($email,$address,$first_name,$last_name,$term,$order_type,$shedule,$restaurant,$F_post_id,$order_id,$total,$phone,$method,$time,$expireTime,$connection);

//orderModel::food_item($item_name,$order_id,$connection);


 ?>