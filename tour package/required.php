<!DOCTYPE html>
<html>
<head>
<title> first site </title>
<style>
</style>
</head>
<body>
<form method="POST">
<fieldset>
<table>
<tr>
<h1>register form</h1>
</tr>
<tr>
<h1>registration Form</h1>
</tr>
</th>
<tr>
<td>name:<input type="text" name="name" placeholder="name"></td>
</tr>
<tr>
<td>email:<input type="email" name="email" placeholder="email"></td>
</tr>
<tr>
<td>phone:<input type="phone" name="phone" placeholder="phone"></td>
</tr>
<tr>
<td>password:<input type="" name="password" placeholder="password"></td>
<tr>
	<td><input type="submit" value="submit" name="submit"></td>
</tr>
</table>
</fieldset>
</form>
<?php
if(isset($_POST['submit']))
{
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
		echo" is required";
	}
	else
	{
		echo $_POST['email'];
	}
</body>
</html>