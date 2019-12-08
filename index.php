<?php
	session_start();

	if(isset($_SESSION['uname']))
	{
		
			require_once("db.php");
			$sql = "SELECT * FROM tutor ";
			$result = mysqli_query($conn,$sql);
?>
		<html>
			<head>
				<title>tutors List</title>
				<link rel="stylesheet" type="text/css" href="styles.css" />
			</head>
			<body>
				<a href='admin_first.php'><input type=button value="BACK TO ADMIN" name="main" class="btnSubmit" align=""></a>
				<form name="frmUser" method="post" action="">
					<div style="width:500px;">
					<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
					<div align="right" style="padding-bottom:5px;"><a href="add_user.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add Tutor</a></div>
					<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
						<tr class="listheader">
							<td>Tutor name</td>
							<td>class</td>
							<td>email </td>
							<td>contects </td>
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
									<td><?php echo $row["name"]; ?></td>
									<td><?php echo $row["class"]; ?></td>
									<td><?php echo $row["email"]; ?></td>
									<td><?php echo $row["phone"]; ?></td>
									<td><a href="edit_user.php?class=<?php echo $row["class"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_user.php?class=<?php echo $row["class"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
								</tr>
								<?php
									$i++;
							}
								?>	
					</table>
					<br><a href='admin_logout.php'><input type=button value=logout name=logout class="btnSubmit" align=""></a>
				</form>
					</div>	
			</body>
		</html>
<?php
	}

	else 
	{
			echo "<script>alert('you cannot access this page without loged in.....! so please LOGIN YOUR ACCOUNT HERE....')</script>";
		echo "<script>location.href='admin_login.php'</script>";
	
	}
?>