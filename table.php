<?php
$link=mysqli_connect("localhost","root","","demo");
$sql="CREATE TABLE workers(id int,firstname VARCHAR(30),lastname VARCHAR(30),email VARCHAR(30))";
$sql="INSERT INTO workers(id,firstname,lastname,email) values ('12','shil','sunil','shi@12')";
if(mysqli_query($link,$sql))
{
echo"table created successfully";
}
else
{
echo"error creating table:".mysqli_errror();
}
?>