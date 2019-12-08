<?php
	session_start();

	if(isset($_SESSION['name']))
{

	session_destroy();

	echo "<script>location.href='login.php'</script>";

}
elseif(isset($_SESSION['uname']))
{
session_destroy();

	echo "<script>location.href='admin_login.php'</script>";
}
else
{
	echo "<script>alert('you need to be logged in to logged out.....! so first LOGIN YOUR ACCOUNT HERE....')</script>";
	echo "<script>location.href='login.php'</script>";

}
?>