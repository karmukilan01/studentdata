<!DOCTYPE html>
<html>
<head>
	<title>TUTOR LOGIN</title>
</head>
<script type="text/javascript">;
	 alert("you need to be a TUTOR to insert data in database...... so please login your account here......");
     </script>
<form action="tutor_login.php" method="post">
<body>
	<center>
		<h2>TUTOR LOGIN</h2>
		<TABLE>
			<TR>
				<td>Name:</td>
				<td>
					<input type="text" name="tname">
				</td>
				<td>class:</td>
				<td>
					<input type="text" name="class">
				</td>
				<td> Email:</td>
				<td>
					<input type="text" name="email" placeholder="Email">
				</td>
	</TR>
	<tr>
	<td>password:</td>
	<td><input type="password" name="password" placeholder="password"><br></td>
	</tr>
	<tr>
		<td><button name="insert">INSERT</button></td>
		<td><button name="delete">DELETE</button></td>
		<td><button name="update">UPDATE</button></td>
		<td><button name="display">DISPLAY</button></td>

	</tr>
	</TABLE>
</center>

</body>
</form>
</html>