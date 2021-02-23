<?php
$link=mysqli_connect("localhost","root","","abcd");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
if(isset($_GET['submit']))
{
	$name=$_GET['name'];
	$email=$_GET['email'];
	$password=$_GET['password'];
$result="insert into studentdata values('$name','$email','$password')";
if(mysqli_query($link,$result))
{
	echo"inserted successfully";
	header('location:login.php');
}
else
{
    echo "database could not able to connect $result".mysqli_error($link);
}}
?>