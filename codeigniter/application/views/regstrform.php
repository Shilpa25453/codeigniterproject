<!DOCTTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			border:2px solid;
			padding: 20px;
			margin: 40px;
		}
	</style>
</head>
	<body>

		<form method="post" action="<?php echo base_url()?>main/regg">
		<table>
			<th>
				<td><h1>REGISTRATION</h1></td>
			</th>
			<tr>
					<td>firstname:</td>
					<td><input type="text" name="firstname" placeholder="firstname"></td>
			</tr>
			<tr>
					<td>lastname:</td>
					<td><input type="text" name="lastname" placeholder="lastname"></td>
			</tr>
			<tr>
					<td>username:</td>
					<td><input type="text" name="username" placeholder="username"></td>
			</tr>
			<tr>
					<td>password:</td>
					<td><input type="text" name="password" placeholder="password"></td>
			</tr>
			<tr>
					<td>mobile:</td>
					<td><input type="text" name="mobile" placeholder="mobile"></td>
			</tr>
			<tr>
					<td>email:</td>
					<td><input type="text" name="email" placeholder="email"></td>
			</tr>
			<tr>
			<td><input type="submit" value="login"></td>
		</tr>
		
	
	</table>
</form>
	</body>
	</html>
