<?php
$link=Mysqli_connect("localhost","root","","abcd");
$sq="CREATE TABLE studentdata(student_name varchar(20),student_email varchar(32),student_password varchar(10))";
if(mysqli_query($link,$sq))
{
echo "create successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>