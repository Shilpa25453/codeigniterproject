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
			text-decoration:underline;
			


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

			margin-left: 300px;
			padding: 20px;
			margin-top: 20px;
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
			<li><a href="<?php echo base_url()?>main/index">HOME</a></li>
			<li><a href="#">REGISTER</a>
				<div class="submenu">
				<ul>
					<li><a href="<?php echo base_url()?>main/details">STUDENT</a></li>
					<li><a href="<?php echo base_url()?>main/trdetails">TEACHER</a></li>
		        </ul>
			</div>
				</li>

			<li><a href="<?php echo base_url()?>main/loginst">LOGIN</a></li>
			
		

			
	</nav>
			
<!-----nav end---->
	
	<fieldset>
	<table>
			<h1>Student Management System</h1>
			<h2>Registration Form</h2>
			<form action="<?php echo base_url()?>main/detailsadd" method="post">
				<tr><td>First Name:</td><td><input type="text" name="fname"></td></tr>
				<tr><td>Last Name:</td><td><input type="text" name="lname"></td></tr>
				<tr><td>Address:</td><td><textarea name="address"></textarea></td></tr>
				<tr><td>District:</td><td>
					<select name="dis">
						<option>TVM</option>
						<option>KOLLAM</option>
						<option>PTA</option>
						<option>ALAPUZHA</option>
						<option>KOTTAYAM</option>
						<option>EKLM</option>
						<option>IDUKKI</option>
						<option>THRISSUR</option>
						<option>PALAKKAD</option>
						<option>WAYANAD</option>
						<option>KOZHIKODE</option>
						<option>MALAPPURAM</option>
						<option>KANNUR</option>
						<option>KASARGODE</option>

					</select>

				</td></tr>
				<tr><td>Pin code:</td><td><input type="text" name="pin"></td></tr>
				<tr><td>Phone Number:</td><td><input type="text" name="phone"></td></tr>
				<tr><td>Date of Birth:</td><td><input type="date" name="dob"></td></tr>
				<tr><td>Gender</td><td><input type="radio" name="gender" id="m" value="Male"><label for="m">Male</label></td>
				<td><input type="radio" name="gender" id="f" value="Female"><label for="f">Female</label></td></tr>
				<tr><td>Highest Education:</td><td>
					<select name="edu">
						<option>PHD</option>
						<option>PG</option>
						<option>Degree</option>
						<option>HSC</option>
						<option>SSLC</option>
					</select>
				</td></tr>
				<tr><td>E-mail:</td><td><input type="email" name="email"></td></tr>
				<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
				<tr><td></td><td><input type="submit" name="submit"></td></tr>
		
			</form>
	
	</table>
	</fieldset>
		
</body>
</html>