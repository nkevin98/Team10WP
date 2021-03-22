<!DOCTYPE html>
<html>
<head>
	<title>Hangman</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<a href="logout.php"><button id="logout">Logout</button></a>
	<?php
	include 'draw.php';
	session_save_path("./");
	session_start();
	//trim to remove any special chars
	$attribute = explode(":", $_SESSION["chosen_word"]);
	$word = trim($attribute[0]);
	$_SESSION["correct"] = $word;
	$word_length = strlen($word);
	if (!empty($_SESSION["status"])) {
		$word_status = $_SESSION["status"];
	} else {
		$word_status = str_repeat('*', $word_length);
	}
	//if a guess was made then check the letters
	if (isset($_POST["guess"])) {
		//if the letter has already been used skip attempt
		if (strpos($_SESSION["letters"], $_POST["guess"]) !== false and !empty($_SESSION["letters"])) {
			echo "<div class='letter'>" . "letter already used. Try again.<br>" . "</div>";
		}
		//wrong guess
		elseif (strpos($word, $_POST["guess"]) === false) {
			--$_SESSION["attempts"];
			echo "<div class='letter'>" . "wrong letter try again.<br>" . "</div>";
			$_SESSION["letters"] .= $_POST["guess"];
		}
		//checks if the letter is there and update variables
		else {
			for ($i = 0; $i < $word_length; $i++) {
				if ($word[$i] == $_POST["guess"]) {
					$word_status[$i] = $_POST["guess"];
					$_SESSION["status"] = $word_status;
				}
			}
			$_SESSION["letters"] .= $_POST["guess"];
		}
	}
	//draw the hangman
	if ($_SESSION["attempts"] == 6) {
		print_hang0();
	} elseif ($_SESSION["attempts"] == 5) {
		print_hang1();
	} elseif ($_SESSION["attempts"] == 4) {
		print_hang2();
	} elseif ($_SESSION["attempts"] == 3) {
		print_hang3();
	} elseif ($_SESSION["attempts"] == 2) {
		print_hang4();
	} elseif ($_SESSION["attempts"] == 1) {
		print_hang5();
	}
	echo "<div class='attempt'>" . 'Attempts Remaining: ' . $_SESSION["attempts"] . '<br>' . "</div>";
	echo "<div class='word_status'>" . $word_status . "</div>";
	//lose
	if ($_SESSION["attempts"] == 0) {
		header('location:gameover.php');
	}
	//win
	elseif (strpos($word_status, '*') === false) {
		++$_SESSION["score"];
		header('location:win.php');
	}
	echo "<span class='word'>" . "<br>Hint: " . $word_length . " letters, " . $attribute[1] . "</span>";
	?>
	<form action="hangman.php" method="post">
		<input type="text" pattern="[a-z]" name="guess" title="please input 1 lowercase letter" maxlength="1">
		<input type="submit" value="Submit">
	</form>
	<?php
	echo "<div class='attempt'>" . 'Letters Guessed: ' . $_SESSION["letters"] . '<br>' . "</div>";
	echo "<div class='attempt'>" . "Score: " . $_SESSION["score"] . "</div>";
	?>
</body>

</html>