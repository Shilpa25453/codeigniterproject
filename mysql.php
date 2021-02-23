<?php
$link=mysqli_connect("localhost","root","");
if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="create database demo";
if(mysqli_query($link,$sql))
{
echo"database created suceesfully";
}
else
{
echo"error:could not connect $sql".mysqli_error();
}
?>