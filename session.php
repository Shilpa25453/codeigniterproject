<?php
session_start();
//$_session['username']="shil";
//echo"session variables are set";
SESSION_destroy();
if(isset($_SESSION['username']))
{
	$_SESSION['username']+=1;
	
}
else
{
	$_SESSION['username']=1;
}
$msg="you visited".$_SESSION['username'];
?>
<!DOCTTYPE html>
<html>
<body>
<?php echo($msg);?>
</body>
</html>


