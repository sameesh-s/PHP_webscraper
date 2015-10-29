<?php
$con = mysqli_connect("db.fisat.edu","mca","mca");
mysqli_select_db($con,"mcadb") or die(mysqli_error($con));

$name=$_POST["username"];

$q=mysqli_query($con,"SELECT * FROM 47user");
$uid=mysqli_num_rows($q)+1;
$pswd=$_POST["pswd"];
$query=mysqli_query($con,"INSERT INTO 47user(uid,user_name,pswd) VALUES ($uid,'$name','$pswd')");
	setcookie("user",$name);
	header('Location: user.php');
	exit;		
?>
