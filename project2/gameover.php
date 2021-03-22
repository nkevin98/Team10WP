<!DOCTYPE html>
<html>
<head>
	<title>Game Over</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href="logout.php"><button id="logout">Logout</button></a>
	<p>Game Over!</p>
	<?php
	include 'draw.php';
	print_hang6();
	?>
	<p> <a href="start.php">Try again?</a></p>
</body>
</html>