<?php 
include("connection.php");
$order_id=$_POST['order_id'];
$query="UPDATE food_request SET is_accepted=4 WHERE order_id='$order_id'; ";
$result=mysqli_query($connection,$query);
if ($result) {
        echo "Successfully";
        }else{
        echo "Query Failed";
}    

 ?>