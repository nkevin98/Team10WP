<!DOCTYPE html>
<html>
<head>
	<title>Hangman</title>
</head>
<body>
	<?php
	session_start();
	//trim to remove any special chars
	$word = trim($_SESSION["chosen_word"]);
	$word_length = strlen($word);
	if (!empty($_SESSION["status"])) {
		$word_status = $_SESSION["status"];
	}
	else {
		$word_status = str_repeat('*', $word_length);
	}
	//if a guess was made then check the letters
	if (isset($_POST["guess"])) {
		//wrong guess
		if (strpos($word, $_POST["guess"]) === false) {
			$_SESSION["attempts"]--;
			echo "wrong letter try again.<br>";
			
		}
		//if the letter has already been used skip attempt
		elseif (strpos($_SESSION["letters"], $_POST["guess"]) !== false and !empty($_SESSION["letters"])) {
			echo "letter already used. Try again.<br>";
		}
		//checks if the letter is there and update variables
		for ($i=0; $i < $word_length; $i++) { 
			if ($word[$i] == $_POST["guess"]) {
				$word_status[$i] = $_POST["guess"];
				$_SESSION["status"] = $word_status;
			}
		}
		$_SESSION["letters"] .= $_POST["guess"];
	}
	echo $word_status;
	//game over
	if ($_SESSION["attempts"] == 0) {
		header('location:gameover.php');
	}
	//winner
	elseif (strpos($word_status, '*') === false) {
		++$_SESSION["score"];
		header('location:win.php');
	}
	?>
	<form action="hangman.php" method="post">
		<input type="text" pattern="[a-z]" name="guess" title="single alpha characters only" maxlength="1">
		<input type="submit" value="Submit">
	</form>
	<?php
	echo 'Attempts Remaining: '.$_SESSION["attempts"].'<br>';
	echo 'Letters Guessed: '.$_SESSION["letters"].'<br>';
	echo "Score: ".$_SESSION["score"];
	?>
</body>
</html>