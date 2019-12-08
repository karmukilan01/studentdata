<?php 
	include 'db.php';
 ?>
<input type="button" value="BACK TO MAIN" style="background-color:pink; color:darkgreen; font-weight: bold; cursor: pointer; width: 200px;height: 40px"  onclick="window.location.href='index.html'"><br><br><br>
 <form action="search.php" method="POST">
 	<input type="text" name="search" placeholder="search">
 	<button type= "submit" name="submit-search">SEARCH</button>
 </form>

 <h1>SEARCH PAGE</h1>
 <h2>ALL DATA:</h2>
 <div class="student-container">
 	<?php
 		$sql = "SELECT * FROM student";
 		$result = mysqli_query($conn, $sql);
 		$queryResults = mysqli_num_rows($result);

 		if ($queryResults > 0) {
 			while ($row = mysqli_fetch_assoc($result)) {
 				echo "<div>
 					<h4>".$row['regno']."</h4>;
 					<h4>".$row['name']."</h4>;
 					<h4>".$row['gender']."</h4>;
 					<h4>".$row['yearstudying']."</h4>;
 					<h4>".$row['department']."</h4>;
 					<h4>".$row['fathername']."</h4>;
 					<h4>".$row['mothername']."</h4>;
 					<h4>".$row['parentmobile']."</h4>;
 					<h4>".$row['studentmobile']."</h4>;
 					<h4>".$row['email']."</h4>;
 					<h4>".$row['arrear']."</h4>;
 					<h4>".$row['attendance']."</h4>;
 				</div>";	


 			}
 		}
 	 ?>
 	
 </div>

</body>
</html>