<?php 
include("connection.php");
$email=$_GET['username'];
$query="SELECT payfee.year,payfee.month,payfee.amount,payfee.paidDateTime,payfee.cash_card FROM payfee,boarder WHERE payfee.Bid=boarder.Bid AND boarder.email='{$email}' ORDER BY payfee.payid DESC LIMIT 6;";
$res=mysqli_query($connection,$query);

while ($result=mysqli_fetch_array($res)) {
	$data[]=$result;
}
print(json_encode($data));
//../resource/Images/uploaded_boarding/
 ?>