<?php
$mysql=new mysqli("localhost","root","","yuva");
$uname=$_GET['user_name'];
$upass =$_GET['user_password'];
$usta=$_GET['user_status'];
$result=$mysql->query("insert into yuva_ker(user_name,user_password,user_status) values ('$uname','$upass','$usta')");
header("Location:index.php");
?>

