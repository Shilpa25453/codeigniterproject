<?php
$link=Mysqli_connect("localhost","root","","regstrlog");
$sq="CREATE TABLE studentdata(rollno int primary key,student_name varchar(20),student_email varchar(32),student_password varchar(10))";
if(mysqli_query($link,$sq))
{
echo "create successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>