<?php
$link=Mysqli_connect("localhost","root","","company");
$sq="CREATE TABLE company(name varchar(20),district varchar(20),gender varchar(20),password varchar(10))";
if(mysqli_query($link,$sq))
{
echo "create successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>