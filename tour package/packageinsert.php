<?php
$mysql=new mysqli("localhost","root","","groupproject");
$id=$_POST["id"];
$name=$_POST["name"];
$cost=$_POST["cost"];
$duration=$_POST["duration"];
$location=$_POST["location"];
$stay=$_POST["stay"];
$regdate=$_POST["regdate"];
$mysql->query("insert into package(p_id,name,cost,duration,location,stay,regdate)values('$id','$name','$cost','$duration','$location','$stay','$regdate')");
header('location:package form.php');

?>