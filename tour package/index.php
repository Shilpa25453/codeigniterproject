<!DOCTYPE html>
<html>
<head>
<title> first site </title>
<style>
</style>
</head>
<body>
<form method="POST">
<fieldset style="width:30%">
<table>
<th>
<tr>
<h1>registration Form</h1>
</tr>
</th>
<tr>
	<td>name:<input type="text" name="name" placeholder="name"></td>
</tr>
</br>
<tr>
	<td>email:<input type="email" name="email" placeholder="email"></td>
</tr>
</br>
<tr>
	<td><input type="submit" value="submit" name="submit"></td>
</tr>
</table>
</fieldset>
</form>
<?php
if(isset($_POST['submit']))
{
	//echo "name:".$_POST['name'];
	//echo"<br>";
	//echo "email:".$_POST['email'];
	//echo"<br>";
	if(empty($_POST['name']))
	{
		echo"name is required";
	}
	else
	{
		echo $_POST['name'];
	}
	if(empty($_POST['email']))
	{
		echo"name is required";
	}
	else
	{
		echo $_POST['email'];
	}
}


?>

</body>
</html>
