<?php

$name=$_POST['tname'];
$class=$_POST['class'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$conn= new mysqli('localhost','root','','cse_student');
if($conn->connect_error){
	die('connection failed :'.$conn->connect_error);
}else{
	$stmt= $conn->prepare("insert into tutor(name,class,email,password,phone) values(?,?,?,?,?)");
	$stmt->bind_param("ssssi",$name,$class,$email,$password,$phone);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
echo '<script type="text/javascript">';
echo 'alert("The data is inserted successfully.......:)")';
echo '</script>';	
?>