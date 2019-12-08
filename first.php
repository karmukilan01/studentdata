<?php

	session_start();
	require_once("db.php");
	if(isset($_SESSION['name']) OR isset($_SESSION['uname']))
	{
	if(isset($_SESSION['uname']))
	{
		echo '<input type="button" class="btnSubmit" value="BACK TO ADMIN" onclick="window.location=\'admin_first.php\'" />';
	}
			$sql = "SELECT * FROM student ";
			$result = mysqli_query($conn,$sql);
?>
		<html>
			<head>
				<title>students List</title>
				<link rel="stylesheet" type="text/css" href="styles.css" />
			</head>
			<body><br>
				<br><a href='tutor_logout.php'><input type=button value=logout name=logout class="btnSubmit" align=""></a>
				<a href='mainpage.html'><input type=button value="Go To MainPage" name="main" class="btnSubmit" align=""></a>
				<form name="frmUser" method="post" action="">
					<div style="width:500px;">
					<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
					<div align="right" style="padding-bottom:5px;"><a href="project1.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add Student</a></div>
					<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
						<tr class="listheader">
							<td>Reg.No</td>
							<td>Student Name</td>
							<td>Gender</td>
							<td>year</td>
							<td>Department</td>
							<td>Father Name</td>
							<td>Mother Name</td>
							<td>Parent Mobile</td>
							<td>Student Mobile</td>
							<td>E-mail </td>
							<td>No.of.Arrear</td>
							<td>Attendance(%)</td>
							<td>CRUD Actions</td>
						</tr>
						<?php
							$i=0;
							while($row = mysqli_fetch_array($result))
							{
								if($i%2==0)
									$classname="evenRow";
								else
									$classname="oddRow";
						?>
								<tr class="<?php if(isset($classname)) echo $classname;?>">
									<td><?php echo $row["regno"]; ?></td>
									<td><?php echo $row["name"]; ?></td>
									<td><?php echo $row["gender"]; ?></td>
									<td><?php echo $row["yearstudying"]; ?></td>
									<td><?php echo $row["department"]; ?></td>
									<td><?php echo $row["fathername"]; ?></td>
									<td><?php echo $row["mothername"]; ?></td>
									<td><?php echo $row["parentmobile"]; ?></td>
									<td><?php echo $row["studentmobile"]; ?></td>
									<td><?php echo $row["email"]; ?></td>
									<td><?php echo $row["arrear"]; ?></td>
									<td><?php echo $row["attendance"]; ?></td>
									<td><a href="edit_student.php?regno=<?php echo $row["regno"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_student.php?regno=<?php echo $row["regno"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
								</tr>
								<?php
									$i++;
							}
								?>	
					</table>
				</form>
					</div>	
			</body>
		</html>
<?php
	}
	else
	{
		$query="select * from tutor where email='".$_POST['email']."' and password='".$_POST['password']."'";
		$result=mysqli_query($conn,$query);
		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['name']=$_POST['email'];
			echo "<script>location.href='first.php'</script>";
		}
		else
		{
			echo "<script>alert('username or password incorrect.....!')</script>";
			echo "<script>location.href='login.php'</script>";
		}
	}