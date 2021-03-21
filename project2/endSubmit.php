<?php
//this page is just to set the difficulty and choose the words accordingly, DO NOT TOUCH
	session_save_path("./");
	session_start();
	$fp = fopen('leaderboard.txt', "a+");
	chmod("leaderboard.txt", 777);
	$data = $_SESSION["score"]."\n";
	fwrite($fp, $data);
	fclose($fp);
	header('location:leaderboard.php');
?>