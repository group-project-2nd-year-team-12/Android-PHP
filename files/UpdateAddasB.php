<?php 

include("connection.php");
$request_id=$_POST['request_id'];

 $query="UPDATE 
        boarder b 
        JOIN 
        student s 
        ON (b.email=s.email)
        JOIN
        confirm_rent c
        ON b.Bid=c.Bid 
        SET 
        b.user_accepted=1 ,
        s.user_accepted=3,
        c.payment_date=now(),
        c.is_paid=1
        WHERE 
        b.user_accepted=0 
        AND s.user_accepted=1
        AND c.is_paid=0
        AND c.request_id='{$request_id}'; ";
  $result=mysqli_query($connection,$query);
  if ($result) {
                echo "Successfully";
        }else{
        echo "Query Failed";
}    

 ?>