<?php
session_start();
if(isset($_SESSION['name']) OR isset($_SESSION['uname']))
{

require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE student set name='" . $_POST["name"] . "',gender='" . $_POST["gender"] . "',yearstudying='" . $_POST["yearstudying"] . "',department='" . $_POST["department"] . "',fathername='" . $_POST["fathername"] . "',mothername='" . $_POST["mothername"] . "',parentmobile='" . $_POST["parentmobile"] . "',studentmobile='" . $_POST["studentmobile"] . "', email='" . $_POST["email"] . "', arrear='" . $_POST["arrear"] . "', attendance='" . $_POST["attendance"] . "' WHERE regno='" . $_POST["regno"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM student WHERE regno='" . $_GET["regno"] . "'";
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
<div align="right" style="padding-bottom:5px;"><a href="first.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> Back to main</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Student</td>
</tr>
<tr>
<td><label>studentName</label></td>
<td><input type="hidden" name="regno" class="txtField" value="<?php echo $row['regno']; ?>"><input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>"></td>
</tr>
<tr>
	<td><label>Gender</label></td>
	<td>
		<input type="radio" name="gender" value="Male" required>Male
		<input type="radio" name="gender" value="Female" required>Female
		<input type="radio" name="gender" value="other" required>other
	</td>
</tr>
<tr>
	<td><label>Year</label></td>
	<td>
		<select name="yearstudying" required>
			<option value="I-st YEAR">I-st YEAR</option>
			<option value="II-nd YEAR">II-nd YEAR</option>
			<option value="III-rd YEAR">III-rd YEAR</option>
			<option value="IV-th YEAR">IV-th YEAR</option>
		</select>
	</td>
</tr>
<tr>
	<td><label>Department</label></td>
	<td>
		<select name="department" required>
			<option value="CSE">CSE</option>
			<option value="IT">CSE</option>
			<option value="ECE">ECE</option>
			<option value="EEE">EEE</option>
			<option value="MECH">MECH</option>
			<option value="CIVIL">CIVIL</option>
		</select>
	</td>
</tr>
<tr>
<td><label>Father Name</label></td>
<td><input type="text" name="fathername" class="txtField" value="<?php echo $row['fathername']; ?>"></td>
</tr>
<tr>
<td><label>Mother Name</label></td>
<td><input type="text" name="mothername" class="txtField" value="<?php echo $row['mothername']; ?>"></td>
</tr>
<tr>
<td><label>Parent Mobile</label></td>
<td><input type="number" name="parentmobile" class="txtField" value="<?php echo $row['parentmobile']; ?>"></td>
</tr>
<tr>
<td><label>student Mobile</label></td>
<td><input type="studentmobile" name="studentmobile" class="txtField" value="<?php echo $row['studentmobile']; ?>"></td>
</tr>
<tr>
<td><label>email</label></td>
<td><input type="email" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td><label>No.of.Arrear</label></td>
<td><input type="number" name="arrear" class="txtField" value="<?php echo $row['arrear']; ?>"></td>
</tr>
<tr>
<td><label>Attendance(%)</label></td>
<td><input type="number" name="attendance" class="txtField" value="<?php echo $row['attendance']; ?>"></td>
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
		echo "<script>alert('you cannot access this page without logged in.....! so please LOGIN YOUR ACCOUNT HERE....')</script>";
		echo "<script>location.href='login.php'</script>";
}
?>