<!DOCTYPE html>
<html>
<head>
	<title>travel</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
	
fieldset{
	width:300px;
	height:300px;
	margin-left:550px;
	margin-top:180px;
	background-color:rgba(0,0,0,0.4	);

}
input{
	padding:10px;
	margin-top:10px;
	margin-left:50px;
}
	</style>
</head>
<body class="reg">

	<form action="insert.php" method="POST">
		<fieldset>
		<h1 style="margin-left:60px; color:white;">REGISTER</h1>
		<input type="text" name="name" placeholder="Name" required="">
		<input type="text" name="number" placeholder="Number" required="">
		<input type="email" name="email" placeholder="email" required=" ">
		<input type="password" name="password" placeholder="password" required=" ">
		<input type="submit" name="submit"  class="btn">
		</fieldset>
	</form>
    	

</body>
</html>