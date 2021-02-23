<html>
<head>
	<title>
		Login Page
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
</style>
	
	

	
	
</head>
<body>
	<!----nav start----->
	<nav class="menubar">

		<ul>
			<li><a href="<?php echo base_url()?>main/index">Home</a></li>
			<li><a href="#">Register</a>
				<div class="submenu">
				<ul>
					<li><a href="<?php echo base_url()?>main/details">student</a></li>
					<li><a href="<?php echo base_url()?>main/trdetails">teacher</a></li>
		        </ul>
			</div>
				</li>

			<li><a href="<?php echo base_url()?>main/loginst">Login</a></li>
			
		

			
	</nav>
			
<!-----nav end---->
	<form action="<?php echo base_url()?>main/logincheckst" method="post">
	<table>
		<tr>
			<td>Email Id</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="Password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="LOGIN"></td>
		</tr>
	</table>
	</form>
</body>
</html>