<?php
$con = mysqli_connect("localhost","root","mca");
mysqli_select_db($con,"mcadb") or die(mysqli_error($con));

echo '<html
<title>View Product</title>
	<h1>Product</h1><br>';
echo 'url_id : '.$_POST["url_Id"];

$result=mysqli_query($con,"SELECT up_date, url_id, value
FROM 47value_table");

while($row = mysqli_fetch_row( $result))
	{
	echo '<br>'.$row[0]." : ";
	echo $row[2].'"<br>';
	}

?>
