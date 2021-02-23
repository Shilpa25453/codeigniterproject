<?php
require('connection.php');
    $id=$_POST['id'];
	$name=$_POST['name'];
	$number=$_POST['number'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$email=$_POST['email'];
    $password=$_POST['password'];


$sql="insert into register values('$id','$name','$number','$gender','$age','$address','$email','$password','1')";


if(mysqli_query($link,$sql))
{
	
	 header("Location: index.php");
}
else
{
    echo "database could not able to connect $sql".mysqli_error($link);
}
