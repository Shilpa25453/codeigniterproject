<!DOCTTYPE html>
<html>
<head>
<title>project3</title>
<style>
 input{
 padding:10px;
 margin:10px;}
</style>
</head>
<body>
	<form action="" method="GET">
		<fieldset style="width:100px">
		<legend>registration</legend>
		<table>
				
                <tr>
				<td><h2>first Name:</h2></td>
				<td><input type="text" name="fname"></td>
			</tr>
			
			<tr>
				<td><h2>last name:</h2></td>
				<td><input type="name" name="lname"></td>
			</tr>
            </br>
			<tr>
				<td><h2>email:</h2></td>
				<td><input type="email" name="email"></td>
			</tr>
            <tr>
			<td><input type="submit" name="submit" value="register"></td>
			</tr>
</fieldset>
</form>
<?php
$link=mysqli_connect("localhost","root","","efg");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
if(isset($_GET['submit']))
{
	$name=$_GET['fname'];
	$lname=$_GET['lname'];
	$email=$_GET['email'];
$result="insert into insertion values('$name','$lname','$email')";
if(mysqli_query($link,$result))
{
	echo"inserted successfully";
	header('location:form.php');
}
else
{
    echo "database could not able to connect $result".mysqli_error($link);
}}
?>
<form>

<table>
<tr>

<th>firstname</th>
<th>lastname</th>
<th>EMAIL</th>
<th>ACTION</th>
</tr>
<?php
$link=mysqli_connect("localhost","root","","efg");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$sql="select * from insertion";
$result=mysqli_query($link, $sql);
while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>
	
	<td>".$row["fname"]."</td>
	<td>".$row["lname"]."</td>
	<td>".$row["email"]."</td>
	<td><a href='#'>DELETE</a>
	<a href='#'>EDIT</a></td>
	</tr>";
}
echo "</table>";
 mysqli_close($link);
 ?>
 
 </form>
 </table>
 </body>
 </html>
	