<?php
session_start();
?>
<?php
if(isset($_POST['submit'])){
$_SESSION['user']=$_POST['user'];
$_SESSION['password']=$_POST['password'];
if(($_SESSION['user']
=='dathrutva@gmail.com')&&($_SESSION['password']=='@123')){
$_SESSION['valid'] = true;
header('location:events.php');
}
else{
echo "<h1>login failed</h1>";
header('location:adminlogin.php');
}
}
?>
