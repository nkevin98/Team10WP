<!DOCTYPE html>
<html>
<head>
	<title>Winner!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href="logout.php"><button id="logout">Logout</button></a>
	<h1>Congratulations!</h1>
	<p id="firstp">You were able to guess the correct word.</p>
	<?php
	session_save_path("./");
	session_start();
	echo "<span class='word'>" . "The word was " . $_SESSION["correct"] . "</span>";
	?>
	<div id="container">
		<div class="choice" style="padding: 10px">
			<h2>Continue</h2>
			<p>Continue playing the game to increase your score and climb the leaderboards.</p>
			<form action="difficulty.php" method="post">
				<select name="section">
					<option value="easy.txt">Easy</option>
					<option value="medium.txt">Medium</option>
					<option value="hard.txt">Hard</option>
					<option value="extreme.txt">Extreme</option>
				</select><br>
				<input type="submit" class="button" value="Continue">
			</form>
		</div>
		<div class="choice" style="padding: 10px">
			<h2>End</h2>
			<p>End the game and save your current score to the leaderboard.</p><br>
			<a href="leaderboard.php" class="button">Leaderboards</a>
		</div>
	</div>
	<a href="start.php" class="button">Restart</a>
	<?php
	//resets everthing but the score to continue
	$_SESSION["status"] = '';
	$_SESSION["attempts"] = 6;
	$_SESSION["letters"] = '';
	echo  "<div class='curr_score'>" . "Current Score is: " . $_SESSION["score"] . "</div>";
	?>
</body>

</html>