<?php
echo "<html>";
echo '<script language = javascript >
	fuction watchlist()
	{
	document.form.action="watchlist.php";
	document.form.method="POST";
	document.form.submit();
	return false;
	}
</script>';

$_title=$_COOKIE["user"];
echo '<title>'.$_title.'</title><body>';
echo '<form><input type="submit" name="watch" value="Watchlist" OnClick=watchlist(); ></form>';
?>
