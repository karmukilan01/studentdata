<?php
session_start();
if(isset($_SESSION['uname']))
{

require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE tutor set name='" . $_POST["name"] . "', email='" . $_POST["email"] . "', password='" . $_POST["password"] . "', phone='" . $_POST["phone"] . "' WHERE class='" . $_POST["class"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM tutor WHERE class='" . $_GET["class"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New tutor</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> Back to main</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit tutor</td>
</tr>
<tr>
<td><label>TutorName</label></td>
<td><input type="hidden" name="class" class="txtField" value="<?php echo $row['class']; ?>"><input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>"></td>
</tr>
<td><label>email</label></td>
<td><input type="email" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<td><label>contect</label></td>
<td><input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>
<?php
}
else
{
		echo "<script>location.href='login.php'</script>";
}
?>