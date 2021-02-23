<!DOCTYPE html>
<html>
<head>
	<title>Package Form</title>
	
	<style>
	
		
	</style>
</head>
<body>
<form action="insert_packages.php" method="POST">
<fieldset style="width:30%">
<table>

<th><tr><h1>Package Form</h1></tr></th>

<tr>
	<td>P_ID:</td>
	<td><input type="text" required name="id"placeholder="p_id"></td>
</tr>
<tr>
	<td>Name:</td>
	<td><input type="text" required name="name"placeholder="name"></td>
</tr>

<tr>
	<td>COST:</td>
	<td><input type="text" required name="cost"placeholder="cost"></td>
</tr>
<tr>
	<td>DURATION:</td>
	<td><input type="text" required name="duration"placeholder="duration"></td>
</tr>
<td>LOCATION:</td>
	<td><input type="text" required name="location"placeholder="location"></td>
</tr>
<td>STAY:</td>
	<td><input type="text" required name="stay"placeholder="stay"></td>
</tr>
<td>REG-DATE:</td>
	<td><input type="text" required name="regdate"placeholder="registration date"></td>
</tr>
<tr>
	
	<td><input type="submit" value="ADD PACKAGES"></td>
	
</tr>
</table>
</body>
</fieldset>
</form>
</html>
