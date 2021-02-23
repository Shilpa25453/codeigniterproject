<?php
$link=mysqli_connect("localhost","root","","efg");
$id=$_GET['id'];
$firstname=$_GET['ffname'];
$lastname=$_GET['lname'];
$email=$_GET['email'];
$sq="update view set firstname='$fname',lastname='$lname',email='$email', where id='$id'";
if(mysqli_query($link,$sq))
{
echo "updated successfully";
}
else
{
echo "could not update".mysqli_error($link);
}
?>