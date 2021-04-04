<?php 

include("connection.php");
$email=$_GET['email'];
$query="SELECT 
          request.request_id ,
          boarder.first_name,
          boarder.gender,
          boarder.NIC,
          boarder.telephone,
          boarder.institute,
          confirm_rent.B_post_id,
          confirm_rent.keymoneyAmount,
          confirm_rent.payment_method,
          confirm_rent.payment_date
          
          FROM 
          request ,
          boarder,
          confirm_rent,
          boardings_owner
         
          WHERE 
          request.student_email=boarder.email 
          AND request.request_id=confirm_rent.request_id  
          AND request.BOid=boardings_owner.BOid
          AND boarder.user_accepted=0 
          AND confirm_rent.is_paid=0
          AND confirm_rent.payment_method IN ('online','hand')
          AND boardings_owner.email='$email';";

     $res=mysqli_query($connection,$query);

     while ($result=mysqli_fetch_array($res)) {
              $data[]=$result;
          }  

          print(json_encode($data));   

 ?>