<?php
$link=mysqli_connect("localhost","root","","demo");
$sql="CREATE TABLE eliz(id int,firstname VARCHAR(30),lastname VARCHAR(30),email VARCHAR(30))";
$sq="INSERT INTO eliz(id,firstname,lastname,email)values('8','anjali','s','hn@12')";
if(mysqli_query($link,$sql))
{
echo"table created successfully";
}
if(mysqli_query($link,$sq))
$last_id=mysqli_insert_id($link);
{
echo"data insert successfully";
}
$s="select*from eliz LIMIT 3";
$n=mysqli_query($link,$s);
while($row =mysqli_fetch_assoc($n))
{
	echo"id:".$row["id"]." name:".$row["firstname"]."<br>";
}

?>