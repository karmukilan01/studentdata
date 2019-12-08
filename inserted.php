<?php
	session_start();
	require_once('db.php');	
	if(isset($_SESSION['name']) OR isset($_SESSION['uname']))
	{
		$regno=$_POST['regno'];
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$yearstudying=$_POST['yearstudying'];
		$department=$_POST['department'];
		$fathername=$_POST['fathername'];
		$mothername=$_POST['mothername'];
		$parentmobile=$_POST['parentmobile'];
		$studentmobile=$_POST['studentmobile'];
		$email=$_POST['email'];
		$arrear=$_POST['arrear'];
		$attendance=$_POST['attendance'];
		$conn= new mysqli('localhost','root','','cse_student');
		if($conn->connect_error)
		{
			die('connection failed :'.$conn->connect_error);
		}
		else
		{
			$stmt= $conn->prepare("insert into student(regno,name,gender,yearstudying,department,fathername,mothername,parentmobile,studentmobile,email,arrear,attendance) values(?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("issssssiisii",$regno,$name,$gender,$yearstudying,$department,$fathername,$mothername,$parentmobile,$studentmobile,$email,$arrear,$attendance);
			$stmt->execute();
			$stmt->close();
			$conn->close();
		}
		echo '<script type="text/javascript">';
		echo 'alert("The data is inserted successfully.......:)")';
		echo '</script>';	
		echo "The Given Data Has Been Inserted...........:)";
	}
	else
	{
			echo "<script>alert('you cannot access this page without loged in.....! so please LOGIN YOUR ACCOUNT HERE....')</script>";
			echo "<script>location.href='login.php'</script>";
	}
?>
<br><input type="button" value="BACK TO MAIN" style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px"onclick="window.location.href='first.php'"><br>