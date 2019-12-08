<?php
	session_start();
	require_once('db.php');	
	if(isset($_SESSION['name']) or isset($_SESSION['uname'])) 
	{
?>
		<html>
			<input type="button" value="BACK TO MAIN" style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px"  onclick="window.location.href='first.php'"/>
			<input type="submit" name="logout" style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px" value="Logout"onclick="window.location.href='tutor_logout.php'"><br><br><br>
			<form action="inserted.php" method="post">
				<body>
					<title>INSERTING DATA</title>
					<div>
						<h1></h1>
						<font size=5>
							<b>Reg.No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp</b><input type="text" name="regno" placeholder="Reg.No." required><br><br>
							<b>Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp</b><input type="text" name="name" placeholder="Student Name" required><br><br>
							<b>Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp</b><input type="radio" name="gender" value="Male" required>Male
							<input type="radio" name="gender" value="Female" required>Female
							<input type="radio" name="gender" value="other" required>other<br><br>
							<b>year&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp</b><select name="yearstudying" required>
								<option value="I-st YEAR">I-st YEAR</option>
								<option value="II-nd YEAR">II-nd YEAR</option>
								<option value="III-rd YEAR">III-rd YEAR</option>
								<option value="IV-th YEAR">IV-th YEAR</option>
							</select><br><br>
							<b>Department:&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp</b><select name="department" required>
								<option value="CSE">CSE</option>
								<option value="IT">CSE</option>
								<option value="ECE">ECE</option>
								<option value="EEE">EEE</option>
								<option value="MECH">MECH</option>
								<option value="CIVIL">CIVIL</option>
							</select><br><br>
							<b>FatherName&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp</b><input type="text" name="fathername" placeholder="Father Name" required><br><br>
							<b>MotherName &nbsp&nbsp&nbsp&nbsp:&nbsp</b><input type="text" name="mothername" placeholder="Mother Name" required><br><br> 
							<b>ParentMobile&nbsp&nbsp&nbsp :&nbsp</b><input type="number" name="parentmobile" placeholder="Parent Mobile" required><br><br>
							<b>StudentMobile &nbsp:&nbsp</b><input type="number" name="studentmobile" placeholder="Student Mobile" required><br><br>
  							<b>E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp</b><input type="email" name="email" placeholder="E-mail" ><br><br>
  							<b>No. of Arrear&nbsp&nbsp&nbsp :&nbsp</b><input type="number" name="arrear" placeholder="Arrear" required><br><br>
  							<b>Attendance(%) :&nbsp</b><input type="number" name="attendance" placeholder="Attendance" required><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  							<input type="submit" name="submit" style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px" value="SUBMIT">
						</font>
					</div>
				</body>
			</form>
		</html>
<?php
	}
	else
		{
			echo "<script>alert('you cannot access this page without loged in.....! so please LOGIN YOUR ACCOUNT HERE....')</script>";
			echo "<script>location.href='login.php'</script>";
		}
?>
