<?php
session_start();
if(isset($_SESSION['uname']))
{
if(count($_POST)>0) 
{
	require_once("db.php");
	$sql = "INSERT INTO tutor(name , class, email, password, phone) VALUES ('" . $_POST["name"] . "','" . $_POST["class"] . "','" . $_POST["email"] . "','" . $_POST["password"] . "','" . $_POST["phone"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(empty($current_id)) 
	{
		$message = "New tutor Added Successfully";
	}
}
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
<td colspan="2">Add New Tutor</td>
</tr>
<tr>
<td><label>TutorName</label></td>
<td><input type="text" name="name" placeholder="Enter TutorName" class="txtField" required></td>
</tr>
<tr>
<td><label>Class</label></td>
<td><input type="text" name="class" placeholder="Eg:III-CSE-A" class="txtField" required></td>
</tr>
<td><label>Email</label></td>
<td><input type="email" name="email" placeholder="E-mail" class="txtField" required></td>
</tr>
<td><label>Password</label></td>
<td><input type="password" name="password" placeholder="Enter Password(required)" class="txtField" required></td>
</tr>
<tr>
<td><label>Phone</label></td>
<td><input type="text" name="phone" placeholder="Tutor phone" class="txtField" required></td>
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