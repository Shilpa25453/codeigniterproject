<?php
$link=mysqli_connect("localhost","root","","reg");
$sqli="CREATE TABLE employees(id int(5) primary key,empname varchar(20),empno int(5),empaddress varchar(25),empemail varchar(25),emppassword varchar(25))";
if(mysqli_query($link,$sqli))
{
	echo "table created successfully";
	}
	else
	{
		echo "could not connect".mysqli_error($link);
		}
?>
	
