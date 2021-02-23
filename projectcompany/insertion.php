<?php
$link=mysqli_connect("localhost","root","","projectcompany");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
if(isset($_GET['submit']))
{
	$name=$_GET['name'];
	$lname=$_GET['district'];
	$email=$_GET['gender'];
	$password=$_GET['password'];
$result="insert into insertion values('$name','$district','$gender','$password")";
if(mysqli_query($link,$result))
{
	echo"inserted successfully";
	header('location:form.php');
}
else
{
    echo "database could not able to connect $result".mysqli_error($link);
}}
?>