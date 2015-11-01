<?php
$con = mysqli_connect("localhost","root","mca");
mysqli_select_db($con,"mcadb") or die(mysqli_error($con));
echo '<html>
<title>Watchlist</title>
	<h1>Watch List</h1><br>
	<form action="view.php" method="POST">';
/*$result=mysqli_query($con,"SELECT 47url_table.url_id, 47url_table.url, 47url_table.title, 47url_table.value
FROM 47url_table");*/
$result=mysqli_query($con,"SELECT 47url_table.url_id, 47url_table.url, 47url_table.title, 47url_table.value 
FROM 47url_table , 47combo_table
WHERE 47combo_table.user_id = 1 AND 47combo_table.url_id = 47url_table.url_id");

while($row = mysqli_fetch_row( $result))
	{
	echo '<input type="hidden" name="url_Id" value="';
	echo $row[0].'" ><br>';
	echo '<br>   '.$row[1]."     ".$row[2]."     ".$row[3]."     ";
	echo '<input type="submit" name="productId" value="view" ><br>';
	}
echo '</form>';
?>
