<?php
$mysql=new mysqli("localhost","root","","standarddb");
$id=$_GET['id'];
mysqli_query($mysql,"delete from studentdata where id={$id}");
header("location:view.php");



?>
