<?php
$con = mysqli_connect("localhost","root","mca");
mysqli_select_db($con,"mcadb") or die(mysqli_error($con));

$name=$_POST["username"];
$pswd=$_POST["pswd"];

echo $name."<br>".$pswd;
$query=mysqli_query($con,"INSERT INTO 47user(user_name,password) VALUES ('$name','$pswd')");
echo "inserted";
	setcookie("user",$name);
	//header('Location: user.php');
	//exit;		
?>
