<?php
$con = mysqli_connect("localhost","root","mca");
mysqli_select_db($con,"mcadb") or die(mysqli_error($con));

$name=$_POST["username"];
$pswd=$_POST["pswd"];

echo $name."<br>".$pswd;
$query=mysqli_query($con,"INSERT INTO 47user(user_name,password) VALUES ('$name','$pswd')");

$query1=mysqli_query($con,"SELECT user_id FROM 47user WHERE password = '".$pswd."' and  user_name = '".$name."'");
$user_id=mysqli_fetch_row($query1);
	setcookie("user",$name);
	setcookie("user_id",$user_id[0]);	
	header('Location: user.php');
	exit;		
?>
