<!DOCTYPE html>
<html>
<head>
	<title>Start</title>
</head>
<body>
	<form action="hangman.php" method="post">
		<select name="section">
			<option value="easy.txt">Easy</option>
		</select>
		<input type="submit" value="submit">
	</form>
	<?php
	//sets the session variables and chooses a word
	session_start();
	$_SESSION["status"] = '';
	$_SESSION["attempts"] = 6;
	$_SESSION["letters"] = '';
	$_SESSION["score"] = 0;
	$word_list = file("easy.txt");
	$_SESSION["chosen_word"] = $word_list[array_rand($word_list)];
	?>

</body>
</html>