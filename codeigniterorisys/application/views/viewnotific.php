<html>
<head>
	<title>view</title>
</head>
<style>
	*{
	padding:0px;
	margin:0px;
}
.bi{
	background-image:url("../img/back.jpg");
	background-size:cover;

}
.menubar{
	background-color:black;
	text-align:center;
}
.menubar ul{
	list-style:none;
	display:inline-flex;
	padding:10px;
	
	
}
	
.menubar ul li a{
	color:white;
	text-decoration:none;
	padding:10px;
	
	
}
.menubar ul li{
	
	padding:15px;
}
.menubar ul li a:hover{
	background-color:red;
	border-radius:10px;
	
}
.submenu{
	display:none;
	
}
.menubar ul li:hover .submenu{
	display:block;
	position:absolute;
	background-color:black;
	border-bottom:2px solid red;
	border-radius:10px;
	border-radius:5px;
}


.submenu ul{
	display:block;
	
}
.submenu ul li{
border-bottom:2px solid red;

}
.row{
	display:flex;
	color:white;
	
}
.col{
	background-color:rgb(0,0,0,.4);
	width:450px;
	height:350px;
	padding:15px;
	text-align:justify;
	margin:20px;
}
.row h2{
	text-decoration:underline;
	text-align:center;
	
}
.ft{
	color:white;
	padding:15px;
	text-align:center;
	background-color:black;
	
}
	
	

	
	</style>
<body>
	<!----nav start----->
	<nav class="menubar">

		<ul>
			<li><a href="<?php echo base_url()?>main/shome">Home</a></li>
			
					<li><a href="<?php echo base_url()?>main/viewstud">Profile</a></li>
					<li><a href="<?php echo base_url()?>main/viewnotific">Viewnotification</a></li>
		        
			

			<li><a href="<?php echo base_url()?>main/index ">Logout</a></li>
		</ul>
			
		

			
	</nav>
			
<!-----nav end---->
	
	<form method="post" action="">
		<table border="2">
			<thead>
				<tr>
					<th>
						Slno
					</th>
					<th>
						Teacher Name
					</th>
					<th>
						Phone Number
					</th>

					<th>
						Notification
					</th>
					<th>
						Date
					</th>
					
				</tr>
				<?php
				if($n->num_rows()>0)
				{
					foreach ($n->result() as $row)
					 {
				?>
			</thead>
			<tbody>
				<tr>
					<td>
						<?php echo $row->id;?>
					</td>
					<td>
						<?php echo $row->name;?>
					</td>
					<td>
						<?php echo $row->phone;?>
					</td>
					<td>
						<?php echo $row->notification;?>
					</td>
					<td>
						<?php echo $row->cdate;?>
					</td>
					</tr>
				
					<?php
					
				}
				}
					?>

			</tbody>

		</table>
	</form>
</body>
</html>