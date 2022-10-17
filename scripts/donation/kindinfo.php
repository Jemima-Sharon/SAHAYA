<?php
$con =mysqli_connect('localhost','root');
if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}
mysqli_select_db($con,'userdb1');
$user=$_POST['user'];
$emailID=$_POST['emailID'];
$mobile=$_POST['mobile'];
$kind=$_POST['kind'];
$date=$_POST['date'];
$query ="insert into userinfodataf(user,emailID,mobile,kind,date) values('$user','$emailID','$mobile','$kind','$date') ";
echo "$query";
mysqli_query($con,$query);
header('location:success.php');
?>