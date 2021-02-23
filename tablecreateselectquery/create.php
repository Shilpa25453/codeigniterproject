<?php
$link=Mysqli_connect("loacalhost","root","","efg");
$sq="CREATE TABLE insertion(first_name varchar(40),last_name varchar(20),email varchar(32))";
if(mysqli_query($link,$sq))
{
echo "create successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>
