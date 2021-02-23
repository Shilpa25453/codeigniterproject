<?php
require('connection.php');
	$name=$_POST['name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
    $password=$_POST['password'];


$sql="insert into register values('$id','$name','$number','$email','$password','1')";


if(mysqli_query($link,$sql))
{
	
	 header("Location: index.php");
}
else
{
    echo "database could not able to connect $sql".mysqli_error($link);
}
