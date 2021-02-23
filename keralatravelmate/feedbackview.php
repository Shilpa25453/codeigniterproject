
<!DOCTYPE html>
<html>
<head>
<style>
table,td
{
	border:2px solid red;
	border-collapse:collapse;
	padding:15px;
	margin:5px;
	color:white;
	text-align: center;
	margin-left: 500px;
	margin-top: 200px;
}

.margin{
			margin-top:30px;
		}
.center{
		   margin-left:60px;
	   }
	   h1{
	   	color:white;
	   	font-size:30;
	   	text-align: center;
	   	margin-top:30px;
	   	text-decoration: underline;
	   }
	   
</style>
<link rel="stylesheet" href="css/style.css">
<title></title>
<body class="viewed">
	<a href="userindex.php">Back to home</a>
	<h1>Feedback</h1>
<table>
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Feedback</td>
		<td>Action</td>
		<td>Action</td>
		
		
	</tr>
<?php
$mysql=new mysqli("localhost","root","","travel");
$query=$mysql->query("select * from feedback");
while($row=$query->fetch_assoc())
{	
echo "<tr>
		
		<td>".$row["id"]."</td>
		<td>".$row["name"]."</td>
		<td>".$row["feedback"]."</td>
		<td><a href='edit_feedback.php?id={$row['id']}'>Edit</a></td>
		<td><a href='deletefeedback.php?id={$row['id']}'>Delete</a></td>	
	</tr>";          
}
?>
</table>
</body>
</html>