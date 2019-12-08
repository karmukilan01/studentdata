<?php
$uname="karmukilan";
	$password="admin";
	session_start();

	if(isset($_SESSION['uname']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME ADMIN</title>
	<style>
		html
		{
			background:url("images/admin.jpg") no-repeat center center fixed;
			-webkit-background-size:cover;
		}
	</style>
</head>
<body>

<center>
	<h1 style="color: blue">HELLO ADMIN...YOU ARE WELCOME BACK...:)</h1>
	<h1 style="color: blue">what whould you like to access..............?</h1>
	<a href="first.php"><button style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px" >STIUDENT DATABASE</button></a>
	<a href="tutordata.php"><button style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px" >TUTOR DATABASE</button></a><br><br>
	<a href="index.html"><button style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px" >GO TO INDEX</button></a><br><br>
	<a href="admin_logout.php"><button style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px" >LOGOUT</button></a>
</center>


</body>
</html>
<?php
}
else
{
	if($_POST['uname']==$uname && $_POST['password']==$password)
	{
		$_SESSION['uname']=$uname;

		echo "<script>location.href='admin_first.php'</script>";
	}
	else
	{
		echo "<script>alert('username or password incorrect.....!')</script>";
		echo "<script>location.href='admin_login.php'</script>";
	}
}
?>