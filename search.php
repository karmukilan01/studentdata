<?php 
	include 'db.php';
 ?>

 <h1>SEARCH PAGE</h1>

 <div class="student-container">
 	<<?php 
 		if (isset($_POST['submit-search'])) {
 			$search =mysqli_real_escape_string($conn, $_POST['search']);
 			$sql = "SELECT * FROM student WHERE regno ='$search' OR name LIKE '%$search%' OR email ='$search' OR department = '$search'";
 			$result = mysqli_query($conn, $sql);
 			$queryResult = mysqli_num_rows($result);

 			if($queryResult > 0) {
 				while ($row = mysqli_fetch_assoc($result)) {
 					echo "<div class ='student-box'>
 					<h4>".$row['regno']."</h4>
 					<h4>".$row['name']."</h4>
 					<h4>".$row['gender']."</h4>;
 					<h4>".$row['yearstudying']."</h4>
 					<h4>".$row['department']."</h4>
 					<h4>".$row['fathername']."</h4>
 					<h4>".$row['mothername']."</h4>
 					<h4>".$row['parentmobile']."</h4>
 					<h4>".$row['studentmobile']."</h4>
 					<h4>".$row['email']."</h4>
 					<h4>".$row['arrear']."</h4>
 					<h4>".$row['attendance']."</h4>
 					</div>";
 				}
 			}
 			else
 			{
 				echo "There are no results matching your search.....!!";
 			}
 		}

 	 ?>


 </div>