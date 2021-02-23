<?php
$mysql=new mysqli("localhost","root","","yuva");
$id=$_GET['id'];
mysqli_query($mysql,"delete from yuva_ker where user_id=$id");
if($id)
?>