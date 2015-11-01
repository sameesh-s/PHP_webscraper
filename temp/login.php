<?php
$con = mysqli_connect("localhost","root","mca");
mysqli_select_db($con,"mcadb") or die(mysqli_error($con));
$query=mysqli_query($con,"SELECT user_id,user_name FROM 47user WHERE password = '".$_POST["pswd"]."' and  user_name = '".$_POST["username"]."'");
if($name=mysqli_fetch_row($query))
	{
		echo "Login succesfull";
		setcookie("user",$name[1]);
		setcookie("user_id",$name[0]);
		header('Location: user.php');
		exit;		
	}
else
	{
		header('Location: register.html');
	}
?>
