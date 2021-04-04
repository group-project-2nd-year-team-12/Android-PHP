<?php 
include("connection.php");
//$email=$_GET['username'];
$query="SELECT 
 
   
   boarder.first_name,
   boarder.last_name,
   boarder.image,
   boarder.institute
  
   FROM 
  
   boarder;";

   $res=mysqli_query($connection,$query);

   while ($result=mysqli_fetch_array($res)) {
	$data[]=$result;
}
print(json_encode($data));


    ?>