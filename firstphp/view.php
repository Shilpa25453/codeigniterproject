<html>
<head>
<title>Database</title>
<style>
table,tr,td,th
{
	border:2px solid;
	padding:10px;
	border-collapse:collapse;
	margin:20px;
	
}
</style>
</head>
<body>

<form>

<table><tr><th>ACTION</th><th>ROLL NO</th><th>NAME</th><th>ADDRESS</th><th>EMAIL</th></tr>
<?php
$link=mysqli_connect("localhost","root","","student_db");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$sql="select * from registration";
$result=mysqli_query($link, $sql);
while($row=mysqli_fetch_assoc($result))
{
	echo "<tr><td><a href='#'>DELETE</a>&nbsp&nbsp<a href='#'>EDIT</a></td><td>".$row["rollno"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td></tr>";
}
echo "</table>";
 mysqli_close($link);
 ?>
 </form>
 </body>
 </html>