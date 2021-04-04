<?php 



class orderModel{

public static function food_request($email,$address,$first_name,$last_name,$term,$order_type,$shedule,$restaurant,$F_post_id,$order_id,$total,$phone,$method,$time,$expireTime,$connection)
    {
        $query="INSERT INTO food_request (request_id,email,address,first_name,last_name,is_accepted,term,order_type,shedule,restaurant,F_post_id,order_id,total,phone,method,time,expireTime) 
        VALUES(null,'{$email}','{$address}','{$first_name}','{$last_name}',0,'{$term}','{order_type}','{$shedule}','{$restaurant}',{$F_post_id},'{$order_id}',{$total}','{$phone}','{$method}','{$time}','{$expireTime}') LIMIT 1";
         $result=mysqli_query($connection,$query);
    }



     public static function food_item($item_name,$order_id,$connection)
    {
        $query="INSERT INTO order_item (item_name,quantity,order_id) 
        VALUES('{$item_name}',1,'{$order_id}')";
         $result=mysqli_query($connection,$query);
    }

} 

?>