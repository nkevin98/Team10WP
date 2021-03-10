<!DOCTYPE html>
<html>
<head>
	<title>Winner!</title>
</head>
<body>
	<h1>Congratulations!</h1>
	<p>You were able to guess the correct word</p>
	<p> <a href="">Continue </a> or <a href="">End </a></p>
	<a href="start.php">home(temp link)</a>
	<?php
	session_start();
	$_SESSION["status"] = '';
	$_SESSION["attempts"] = 6;
	$_SESSION["letters"] = '';
	echo "Score: ".$_SESSION["score"];
	?>

</body>
</html>