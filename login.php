<!DOCTYPE html>
<html>
<head>
	<title>TUTOR LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">;
	 alert("you need to be a TUTOR to insert data in database...... so please login your account here......");
     </script>
<form action="first.php" method="post">
	
<body>
	<div class="login">
	<center>
		<h2 style="color: white">TUTOR LOGIN</h2>
		<TABLE>
			<TR>
				<td style="color: white"> Email:</td>
				<td>
					<input type="text" name="email" placeholder="Email">
				</td>
	</TR>
	<tr>
	<td style="color: white">Password:</td>
	<td><input type="password" name="password" placeholder="password"><br></td>
	</tr>
	<tr>
		<td><button style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 80px;height: 30px">LOGIN</button></td>
		
	</tr>
	</TABLE>
	<div class="kar">
	<tr>
		
		<td><a href="admin_login.php">Edit</a> Tutor Database</td><br>
	</tr>
	<tr>
		<td>Back To<a href="mainpage.html">Main Page</a></td>
	</tr>
	</div>
</center>
</div>
</body>
</form>

</html>