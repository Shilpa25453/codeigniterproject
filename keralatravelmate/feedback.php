<!DOCTYPE html>
<html>
<head>
<title>php work</title>
<style>
 input,textarea{
 padding:10px;
 margin:10px;
 }
 h1{
		margin-left: 650px;
		margin-top: 50px;
		color:red;
		text-decoration:underline;
	}
fieldset{	
	margin-left:550px;
	margin-top:50px;
}
 
 
</style>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="feed">
<a href="userindex.php">Back to home</a>
<h1>Feedback</h1>
<form action="insert_feedback.php" method="POST">
<fieldset style="width:100px">
<legend>feedback</legend>
<table>

                <tr>
<td><h2>Name:</h2></td>
<td><input type="text" name="name"></td>
</tr>

<tr>
<td><h2>Feedback:</h2></td>
<td><textarea placeholder="write feedback"name="feedback"></textarea>
</tr>
            
<tr>
<td><h2>Phone no:</h2></td>
<td><input type="phoneno" name="phoneno"></td>
</tr>
 <tr>
<td><input type="submit" name="submit" value="Submit" class="btn"></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
