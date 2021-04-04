<?php 

include("connection.php");

$username=$_POST["username"];
$hashpassword=$_POST["password"];
$password=sha1($hashpassword);
//$level=$_POST["level"];t


 // $query="SELECT level,email,password FROM  boarder WHERE email='$username' AND password='$password' 
 //        UNION SELECT level,email,password FROM  boardings_owner WHERE email='$username' AND password='$password'
 //        UNION SELECT level,email,password FROM administrator  WHERE email='$username' AND password='$password'  
 //        UNION SELECT level,email,password FROM food_supplier  WHERE email='$username' AND password='$password' 
 //        LIMIT 1 ";
       // $result_set=mysqli_query($connection,$query);
        //return  $result_set;

//$query="SELECT * FROM student WHERE username LIKE '$username' AND password LIKE'$password';";

////correct query

/*$query="SELECT email,password,level FROM boarder WHERE email LIKE '$username' AND password LIKE '$password' AND user_accepted=1 AND level='$level'
UNION SELECT email,password,level FROM boardings_owner WHERE email LIKE '$username' AND password LIKE '$password' AND user_accepted=1 AND level='$level'
UNION SELECT email,password,level FROM food_supplier WHERE email LIKE '$username' AND password LIKE '$password' AND user_accepted=1 AND level='$level'
LIMIT 1;";t*/


$query_boarder="SELECT * FROM boarder WHERE email LIKE '$username' AND password LIKE '$password' AND user_accepted=1;";
$result_boarder=mysqli_query($connection,$query_boarder);


$query_boardings_owner="SELECT * FROM boardings_owner WHERE email LIKE '$username' AND password LIKE '$password' AND user_accepted=1;";
$result_boardings_owner=mysqli_query($connection,$query_boardings_owner);


$query_food_supplier="SELECT * FROM food_supplier WHERE email LIKE '$username' AND password LIKE '$password' AND user_accepted=1;";
$result_food_supplier=mysqli_query($connection,$query_food_supplier);





//$result=mysqli_query($connection,$query);t
if (mysqli_num_rows($result_boarder)==1) {
	echo "LOGIN Boarder";
}else if(mysqli_num_rows($result_boardings_owner)==1){

    echo "LOGIN boardings_owner";
}
else if(mysqli_num_rows($result_food_supplier)==1){

    echo "LOGIN food_supplier";
}
else{
	echo "login not success";
}

 // UNION SELECT email,password,level FROM boardings_owner WHERE email LIKE '$username' AND password LIKE '$password' AND user_accepted=1 level='$level'
 //      UNION SELECT email,password,level FROM food_supplier WHERE email LIKE '$username' AND password LIKE '$password' AND user_accepted=1 AND level='$level' 

 ?>