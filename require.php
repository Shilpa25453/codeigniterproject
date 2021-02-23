<?php
$name="";
$nameerr="";
if(isset($_POST['submit']))
{
if(empty($_POST['name']))
	{
		echo"name is required"."<br>";
	}
	else
	{
	$name=$_POST['name'];
	
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
		$nameerr="only letters and spaces<br>";
		

	}
	
	}
		if(empty($_POST['email']))
	{
	}
	else
	{
		$email=$_POST['email'];
		
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "invalid email<br>";
		
	}
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
<title> first site </title>
<style>
</style>
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<fieldset>
<table>
<tr>
<h1>register form</h1>
</tr>
<tr>
<td>name:<input type="text" name="name" placeholder="name">
<span class="color">*<?php echo $nameerr; ?></span></td>
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

</body>
</html>
