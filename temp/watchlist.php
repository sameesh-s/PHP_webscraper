<?php
echo '<html>
<title>Watchlist</title>
	<h1>Watch List</h1><br>
	<form action="view.php" method="POST">';
$_num=1;
while($_num<11)
	{
	echo '<input type="submit" name="productId" value="';
	echo $_num.'" ><br>';
	$_num++;
	}
echo '</form>';
?>
