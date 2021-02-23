<?php
$link=mysqli_connect("localhost","root","","abcd");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$count=0;
$email=$_GET['email'];
$password=$_GET['password'];
$query="select email,password from studentdata";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_assoc($result))
{
	if($row['email']==$email)
	{
		if($row['password']==$password)
		{
			echo"login success";
			$count=$count+1;
		}
	}
}
if($count==0)
{
	echo"invalid login";
}
?>
	