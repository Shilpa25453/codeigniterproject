<!DOCTYPE html>
<html>
<head>
<title>php work</title>
<style>
 input{
 padding:10px;
 margin:10px;}
</style>
</head>
<body>
	<form action="insert.php" method="GET">
		<fieldset style="width:100px">
		<legend>registration</legend>
		<table>
				
                <tr>
				<td><h2>Student Name:</h2></td>
				<td><input type="text" name="name"></td>
			</tr>
			
			<tr>
				<td><h2>Student email:</h2></td>
				<td><input type="email" name="email"></td>
			</tr>
            </br>
			<tr>
				<td><h2>Student password:</h2></td>
				<td><input type="password" name="password"></td>
			</tr>
            <tr>
			<td><input type="submit" name="submit" value="register"></td>
			</tr>
</fieldset>
</form>
	