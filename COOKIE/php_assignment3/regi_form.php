<?php
$link=mysqli_connect("localhost","root","","reg_table");
$name=$address=$email="";
$nameErr=$addressErr=$emailError="";
if(isset($_POST['submit']))
{
	
	if(empty($_POST['name']))
	{
$nameErr="name is required";
	}
	else
	{
$name=$_POST['name'];
if(!preg_match("/^[a-zA-Z ]*$/",$name))
{
	$nameErr="only letters and spaces"."<br>";
	
}
else{	
}
	}
	if(empty($_POST['address']))
	{
$nameErr="address is required";
	}
	else
	{
$name=$_POST['address'];
if(!preg_match("/^[a-zA-Z ]*$/",$address))
{
	$addressErr="only letters and spaces"."<br>";
	
}
else{	
}
	}
	
if(empty($_POST['email']))
{
$emailError="email is required";
}
else{
	$email=$_POST['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$emailError="invalid email";
	}
	else
	{
		
	}
}
}
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];	
if(!empty($_POST['name']&&!empty($_POST['name']&&!empty($_POST['email']))
{
	if(preg_match("/^[a-zA-Z ]*$/",$name)&& preg_match("/^[a-zA-Z ]*$/",$address)&&(filter_var($email,FILTER_VALIDATE_EMAIL)))
	{
		$result="insert into reg_det(name,address,email)values('$name','$address,'$email')";
	}
}
}
?>







<!DOCTYPE html>
<html>
<head>
</head>
<style>
body{
	background-color:pink;
}
	input,textarea
	{
		padding:10px;
		margin:10px;
		text-align: center;
	}
	fieldset
	{

		width:300px;
		height:400px;

	}
	form h2
	{
		margin-left: 300px;
	}
	table
	{
		text-align: center;
	}
</style>
<body>
	<center>
<h2>Registration Form</h2>
<form method="GET" action="insertnew.php">
	<fieldset>
		<table>
		<tr>
				<td>
			Firstname:</td>
			<td><input type="text" name="fname" placeholder="Enter your Firstname">
				</td>
			</tr>
			<br>
						<tr>
				<td>
			Address:</td>
			<td><textarea name="address" placeholder="address"></textarea>
				</td>
			</tr>
			<br>
			
			
			
				<td>
			Email Id:</td><td><input type="Email"name="email" placeholder="email">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			<tr>
				<td>
			<input type="submit" value="submit">
				</td>
			</tr>
		</table>
	</fieldset>
</form>
<h2>Viewtable</h2>
<table border='1'>
<thead>
<tr>
<th>SlNo</th>
<th>Name</th>
<th>Address</th>
<th>Email id</th>

<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
<?php
$link=mysqli_connect("localhost","root","","reg_table");
$result="SELECT * from reg_det";
$res=mysqli_query($link,$result);
while($row=mysqli_fetch_assoc($res))
{
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['fname']."</td>
    <td>".$row['address']."</td>
    <td>".$row['email']."</td>
    <td><a href='viewform.php?id=".$row['id']."'>View</a></td>
    <td><a href='editform.php?id=".$row['id']."'>Edit</a></td>
    <td><a href='delete.php?id=".$row['id']."''>Delete</a></td>
    </tr>";
}
?>
</center>

</body>
</html>