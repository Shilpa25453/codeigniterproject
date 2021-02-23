<!DOCTYPE html>
<html>
	<head>
	<style>
	table,th,tr,td{
		border:2px solid;
		border-collapse:collapse;
	}
	</style>
	</head>
<body>
<form action="delete.php" method="GET"> 
 <table>
    <thead> 
	 <tr>
        <th>Action</th>
		<th>user_id</th>
		<th>user_name</th>
		<th>user_password</th>
		<th>user_satus</th>
		
	
	</tr>
	<tbody>
	</thead>
	<?php
    $mysql=new mysqli("localhost","root","","yuva");
	$query=$mysql->query("select * from yuva_ker");	
	while($row=$query->fetch_assoc())
    {    

       echo "<tr>
			<td><a href='delete.php?id=".$row['user_id']."'>delete</a></td>
	            <td>".$row['user_id']."</td>
	            <td>".$row['user_name']."</td>
	            <td>".$row['user_password']."</td>
	            <td>".$row['user_status']."</td>
				
				
				
				
	
            </tr>" ;
			
	
	
	}
	
    ?>
    </tbody>
   </table>
   </form>
   </form>
   </body>
 </html>   

	
	
	

			
			
	