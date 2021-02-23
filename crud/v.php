
<?php
$mysql=new mysqli("localhost","root","","yuva");
$mysql->query("insert into yuva_ker(user_name,user_password,user_status) values ('anju','bh@34','6')");
$user_password="adi1hgf2";
$query=$mysql->query("insert into yuva_ker(user_password) values ('$user_password')");
/*if($query)
{
	echo"<h1>login succesfully</h1>";
}
else
{
	echo"error";
}
$mysql->query("delete from yuva_ker where user_password=bh@34");
$query=$mysql->query("delete from yuva_ker where user_password=bh@34"); 
if($query)
{
	echo"<h1>delete succesfully</h1>";
}
else
{
	echo"error";
}
$mysql->query("update yuva_ker set user_name='test' where user_id=28");
$query=$mysql->query("update yuva_ker set user_name='test' where user_id=28");
/*if($query)
{
	echo"<h1>update succesfully</h1>";
}
else
{
	echo"error";
}

if($mysql)
{
	echo"<h1>connection established....<h2>";
}*/
$query=$mysql->query("select * from yuva_ker");
echo"<table border='2'>
<tr>
<th>user_name</th>
<th>user_password</th>
<td>delete</td>";
while($row=$query->fetch_assoc())
{
	echo"<tr>
	<td>".$row['user_name']."</td>
	<td>".$row['user_password']."</td>
    <td><a href='delete.php?ID=".$row['user_id']."'>delete</a></td>";
	"</tr>";
}
echo"</table>";


	

?>