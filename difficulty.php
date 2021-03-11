<?php
	session_start();
	$word_list = file($_POST["section"]);
	$_SESSION["chosen_word"] = $word_list[array_rand($word_list)];
	header('location:hangman.php');
?>