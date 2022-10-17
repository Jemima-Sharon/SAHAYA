<?php
$con =mysqli_connect('localhost','root');
if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}
mysqli_select_db($con,'userdb');
$user=$_POST['user'];
$emailID=$_POST['emailID'];
$mobile=$_POST['mobile'];
$amount=$_POST['amount'];
$query ="insert into userinfodata(user,emailID,mobile,amount) values('$user','$emailID','$mobile','$amount') ";
echo "$query";
mysqli_query($con,$query);
header('location:payment.php');
?>