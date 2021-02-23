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
<form action="insertion.php" method="GET">
<fieldset style="width:100px">
<table>
<tr>
			<td><h1>name</h2></td>
			<td><input type="text" name="name" placeholder="name"></td>
</tr>
<tr>
				<td><h2>district:</h2></td>
				<td><input type="text" name="district"></td>
</tr>
<tr>
				
		<td><h2>gender:</h2></td>		
		 <td><input type="radio" name="gender" id="male" value="male"><label for="male">Male</label></td>
         <td><input type="radio" name="gender" id="female" value="female"><label for="female">Female</label></td>
		 
</tr>
<tr>
				<td><h2>password:</h2></td>
				<td><input type="text" name="password"></td>
</tr>
<tr>
			<td><h2>confirmpassword:</h2></td>
			<td><input type="password" name="password" value="confirm"></td>
</tr>
<tr>
			<td><input type="submit" name="submit"  class="btn"></td>
</tr>


</fieldset>

 
 </form>
 </table>
 </body>
 </html>
	