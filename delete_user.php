<?php
session_start();
if(isset($_SESSION['uname']))
{
	require_once("db.php");
	$sql = "DELETE FROM tutor WHERE class='" . $_GET["class"] . "'";
	mysqli_query($conn,$sql);
	header("Location:index.php");
}
else
{
		echo "<script>location.href='login.php'</script>";
}
?>