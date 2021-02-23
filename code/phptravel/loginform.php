<!DOCTYPE HTML>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		input{
			padding:20px;
		}
		fieldset{
			padding:20px;
			margin-left:400px;
			margin-top:100px;
		}
		.margin{
			margin-top:30px;
		}
	   .center{
		   margin-left:60px;
	   }
	   
		</style>
	</head>
	<body class="login">
	
		<form class="center" action="loginaction.php"  method="POST">
						<fieldset style="width:50px" >
			<legend>login</legend>
				<input type="email" name="email" placeholder="Enter your email id"></br>
				<input type="password" class="margin" name="password" placeholder="password"></br>
				<input type="submit" class="margin center" value="login">
				
			</fieldset>
		</form>
	
	</body>
</html>
