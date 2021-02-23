<?php
$link=mysqli_connect("localhost","root","","demo");
if(mysqli_query($link,$sql))
{
	echo"inserted";

}
else
{
echo"error$sql".mysqli_error()";
}

?>