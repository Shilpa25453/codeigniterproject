<!DOCTYPE html>
<html>
	<head>
	<style>

	table,th,tr,td{
		border:2px solid black;
		border-collapse:collapse;
		margin:10px;
		margin-left:100px;
		color: white;
		padding: 20px;
	}
	h1{
	color: red;
	margin-left:550px;
	margin-top:50px;
	text-decoration:underline;

}

	</style>

	</head>
	<link rel="stylesheet" href="css/style.css">
<body class="bi10">
	<a href="userindex.php">Back to home</a>
	<h1>Book Now</h1>
 <table>
    <thead> 
	 <tr>
        
		<th>Package no</th>
		<th>Package Name</th>
		<th>Type</th>
		<th>Cost</th>
		<th>Location</th>
		<th>Description</th>
	    <th colspan="2">Booking</th>
	    <th colspan="2">Action</th>
	</tr>
	</thead>
	<tbody>
	<?php
require('connection.php');
$sql="SELECT * from packages";
if ($res=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_array($res))
			{
       echo "<tr>
			     <td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['type']."</td>
	            <td>".$row['cost']."</td>
	            <td>".$row['duration']."</td>
				<td>".$row['location']."</td>
				<td>".$row['description']."</td>
			    <td><a href='bookform.php?id=".$row['id']."'>Book Now</a></td>
			    
			    if($row['bookingstatus']==0)
	            {
	            	echo
	            "<td><a href='booking.php?id=$row[id]'>Book now</a></td>
	            <td><a href='cancel.php?id=$row[id]'>Cancel</a></td>";
	        	}
	        	elseif($row['bookingstatus']==1)
	            {
	            	echo
	            "<td>Rejected</td>
	            <td><a href='cancel.php?id=$row[id]'>Cancel</a></td>";
	        	}
	        	else
	        	{
	        		echo
	            "<td><a href='booking.php?id=$row[id]'>Book Now</a></td>
	            <td>Cancelled</td>";

	        	}

            </tr>" ;
		
			}
	}

}
    ?>
    </tbody>
   </table>
   </form>
   </body>
 </html>   