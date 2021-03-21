<!DOCTYPE html>
<html>

<head>
	<title>Winner!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body {
			background-color: antiquewhite;
		}

		h1 {
			color: #7c795d;
			font-family: 'Trocchi', serif;
			font-size: 45px;
			font-weight: normal;
			line-height: 48px;
			margin: 0;
		}

		#firstp {
			font-size: 26px;
			font-weight: 300;
			color: rgb(77, 204, 18);
			margin: 0 0 24px;
		}

		h2 {
			color: #d04764;
			font-family: 'Lobster', cursive;
			font-size: 36px;
			font-weight: normal;
			line-height: 48px;
			margin: 0 0 18px;
			text-shadow: 1px 0 0 #fff;
		}

		p {
			color: #2CA4B0;
			font-family: 'Oleo Script', cursive;
			font-size: 24px;
			font-weight: normal;
			line-height: 32px;
			margin: 0 0 18px;
			text-shadow: 1px 0 0 #fff;
		}

		.word {
			color: #111;
			font-family: 'Open Sans Condensed', sans-serif;
			font-size: 48px;
			font-weight: 700;
			line-height: 48px;
			margin: 0 0 24px;
			padding: 0 30px;
			text-align: center;
			text-transform: uppercase;
		}

		.button {
			display: inline-block;
			padding: 15px 25px;
			font-size: 24px;
			cursor: pointer;
			text-align: center;
			text-decoration: none;
			outline: none;
			color: white;
			background-color: CORAL;
			border: none;
			border-radius: 15px;
			box-shadow: 0 10px #999;
		}

		.button:hover {
			background-color: coral
		}

		.button:active {
			background-color: coral;
			box-shadow: 0 5px #666;
			transform: translateY(4px);
		}

		.curr_score {
			color: #424242;
			font-family: "Adobe Caslon Pro", "Hoefler Text", Georgia, Garamond, Times, serif;
			letter-spacing: 0.1em;
			text-align: center;
			margin: 40px auto;
			text-transform: lowercase;
			line-height: 145%;
			font-size: 14pt;
			font-variant: small-caps;
		}
	</style>
</head>

<body>
	<h1>Congratulations!</h1>
	<p id="firstp">You were able to guess the correct word.</p>
	<?php
	session_save_path("./");
	session_start();
	echo "<span class='word'>" . "The word was " . $_SESSION["correct"] . "</span>";
	//echo "The word was " . $_SESSION["correct"];
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
				<input type="submit" class="button" value="SUBMIT">
			</form>
		</div>
		<div class="choice" style="padding: 10px">
			<h2>End</h2>
			<p>End the game and save your current score to the leaderboard.</p><br>
			<a href="#" class="button">Link Button</a>
		</div>
	</div>
	<a href="start.php" class="button">HOME</a>
	<?php
	//resets everthing but the score to continue
	$_SESSION["status"] = '';
	$_SESSION["attempts"] = 6;
	$_SESSION["letters"] = '';
	echo  "<div class='curr_score'>" . "Current Score is: " . $_SESSION["score"] . "</div>";
	?>
</body>

</html>