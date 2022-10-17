<?php
$con =mysqli_connect('localhost','root');
if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}
mysqli_select_db($con,'userdb2');
$fromEmail=$_POST['fromEmail'];
$toEmail=$_POST['toEmail'];
$event=$_POST['event'];
$message=$_POST['message'];
$query ="insert into eventinfodata(fromEmail,toEmail,event,message) values('$fromEmail','$toEmail','$event','$message') ";
echo "$query";
mysqli_query($con,$query);
header('location:eventmail_success.php');
?>