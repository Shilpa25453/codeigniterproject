<?php
$link=mysqli_connect("localhost","root","","student_db");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
if(isset($_GET['submit']))
{
	$name=$_GET['name'];
	$rollno=$_GET['rollno'];
	$address=$_GET['address'];
	$email=$_GET['email'];
$result="insert into registration values('$name','$rollno','$address','$email')";
if(mysqli_query($link,$result))
{
	echo"inserted successfully";
	header('location:view.php');
}
else
{
    echo "database could not able to connect $result".mysqli_error($link);
}}
?>