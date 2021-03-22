<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 2 - Hangman!</title>
</head>
<body>
    <h1>Hangman</h1>
    <a href="login.php"> Login here. </a>
</body>
</html>

Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.