<?php
require('connection.php');
   
$name=$_GET['name'];
$number=$_GET['number'];
$gender=$_GET['gender'];
$age=$_GET['age'];
$address=$_GET['address'];
$email=$_GET['email'];
    $password=$_GET['password'];


$sql="insert into register(name,number,gender,age,address,email,password,usertype) values('$name','$number','$gender','$age','$address','$email','$password','1')";


if(mysqli_query($link,$sql))
{

header("Location: index.php");
}
else
{
    echo "database could not able to connect $sql".mysqli_error($link);
}
?>



