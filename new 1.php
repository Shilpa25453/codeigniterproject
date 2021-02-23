<?php
$link=mysqli_connect("localhost","root","");
if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
if(mysqli_query($link,$sql)
{
echo"database created suceesfully";
}
else{
echo"couldnotable to cannot$sql";
}