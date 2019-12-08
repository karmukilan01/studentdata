<?php
session_start();
if(isset($_SESSION['name']) OR isset($_SESSION['uname']))
{
	require_once("db.php");
	$sql = "DELETE FROM student WHERE regno='" . $_GET["regno"] . "'";
	mysqli_query($conn,$sql);
	header("Location:first.php");
}
else
{
		echo "<script>alert('you cannot access this page without logged in.....! so please LOGIN YOUR ACCOUNT HERE....')</script>";
		echo "<script>location.href='login.php'</script>";
}
?>