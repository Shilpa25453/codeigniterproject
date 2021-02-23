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
 <table>
    <thead> 
	 <tr>
	
		<th>firstname</th>
		<th>lastname</th>
		<th>email</th>
		
	
	</tr>
	</thead>
	<?php
	$mysql=new mysqli("localhost","root","","demo");
	$query=$mysql->query("update workers set firstname='revathy' where firstname='malu'");	
	while($row=$query->fetch_assoc())
    {    


       echo "<tr>
			
	           
	            <td>".$row['firstname']."</td>
	            <td>".$row['lastname']."</td>
	            <td>".$row['email']."</td>
				
				
				
				
	
            </tr>" ;
			
	
	
	}
	?>
	</table>
	</body>
	</html>	
