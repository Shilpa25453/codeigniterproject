<!DOCTYPE html>
<html>
<head>
	<title>travel</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
	
fieldset{
	width:300px;
	height:500px;
	margin-left:550px;
	margin-top:50px;
	background-color:rgba(0,0,0,0.4	);

}
input{
	padding:10px;
	margin-top:10px;
	margin-left:50px;
}  
textarea
{
	padding:10px;
	margin-top:10px;
	margin-left:50px;
} 
h1{
		margin-left: 550px;
		margin-top: 50px;
		text-decoration:underline;
	}
	</style>
</head>
<body class="reg">
	<a href="userindex.php">Back to home</a>
   <?php
require('connection.php');
session_start();
$id=$_SESSION["id"];
	$result="select * from register where id='$id'";
	$res=mysqli_query($link,$result);
	while($row=mysqli_fetch_assoc($res))
	{
		?>
	<form action="edituser.php?id=<?php echo $id;?>" method="post">
	<input name="id" type="hidden" id="id" value="<?php echo $id;?>">
		<fieldset class="text-white">
		<h1 style="margin-left:60px;">UPDATE</h1>
		<input type="text" name="name" placeholder="Name" required="" value="<?php echo $row['name'];?>">
		<input type="text" name="number" placeholder="Number" required="" value="<?php echo $row['number'];?>">
		<!-- <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
         <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label></br> -->
        <input type="text" name="age"  placeholder="Age"  value="<?php echo $row['age'];?>"></br>
        <textarea style="width:100px;" name="address" placeholder="Address"><?php echo $row['address'];?></textarea>
		<input type="email" name="email" placeholder="email" required=" " value="<?php echo $row['email'];?>">
		<input type="password" name="password" placeholder="password" required=" " value="<?php echo $row['password'];?>">
		<input type="submit" name="submit" value="update" class="btn">
		</fieldset>
	</form>
	<?php
	}
	?>
</body>
</html>