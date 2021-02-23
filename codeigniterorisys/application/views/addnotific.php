<html>
<head>
	<title>
		Registration Form
	</title>
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
	
	

	
	
		table
		{
			text-align:center;
			margin: 20px;
			padding:20px;



		}
		body
		{
			text-align: center;
			margin:30px;
		}
		tr,td
		{
			margin:30px;
			padding: 15px;
		}
		fieldset
		{
			width:500px;
			margin-left: 400px;
			margin-top:20px;
			text-align:center;
		}
		input
		{
			
		}
	</style>
</head>
<body>
	<!----nav start----->
	<nav class="menubar">

		<ul>
			<li><a href="<?php echo base_url()?>main/thome">Home</a></li>
			
					
					<li><a href="<?php echo base_url()?>main/viewdetails">Viewstudents</a></li>
					<li><a href="#">Notification</a>
					<div class="submenu">
				<ul>
					<li><a href="<?php echo base_url()?>main/snotific">ADD</a></li>
					<li><a href="<?php echo base_url()?>main/viewnotifictr">VIEW</a></li>
		        </ul>
			</div>
		        
			</li>

			<li><a href="<?php echo base_url()?>main/index">Logout</a></li>
		</ul>
			
		

			
	</nav>
			
<!-----nav end---->
	
	<fieldset>
	<table>
		
			<h1>Add Notifications</h1>
			<form action="<?php echo base_url()?>main/notification" method="post">
				<tr><td>Notification:</td><td><textarea name="notific"></textarea></td></tr>
				

				<tr><td></td><td><input type="submit" name="submit"></td></tr>
		
			</form>
	
	</table>
	</fieldset>
		
</body>
</html>