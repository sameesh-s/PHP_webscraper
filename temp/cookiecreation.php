<?php
$con = mysqli_connect("db.fisat.edu","mca","mca");
mysqli_select_db($con,"mcadb") or die(mysqli_error($con));
$query=mysqli_query($con,"SELECT user_name FROM 47user WHERE pswd = '".$_POST["pswd"]."' and  user_name = '".$_POST["username"]."'");

if($name=mysqli_fetch_row($query))
	{
	if($name[0]==$_POST["username"])
		{
		echo "Login succesfull";
		setcookie("user",$name[0]);
		}
	else
		{
		echo "User name doesn't match";
		}
	}
else
	{
	echo "redirect to register page";
	}

echo "<br>program works";






/*
if (!isset($_COOKIE["user"]))
	{
	echo "cookie dosn't exist";
	}
else
	{
	echo "Cookie exist</br>";
	setcookie("user",null,-1);
	echo "cookie deleted";
	}
*/
?>
