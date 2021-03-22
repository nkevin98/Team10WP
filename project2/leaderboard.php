<!DOCTYPE html>
<head>
	<title>leaderboard</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <a href="logout.php"><button id="logout">Logout</button></a>
    <h1>Leaderboard</h1>
    <div id="container" style="width:5%">
        <ol>
        <?php  
        session_save_path("./");
        session_start();
        if (!isset($_SESSION["leaders"])) {
            $_SESSION["leaders"] = "1 jake\n3 jatt\n";
        }
        $_SESSION["leaders"] .= $_SESSION["score"]." ".$_SESSION["username"]."\n";
    	$array = explode("\n", $_SESSION["leaders"]);
        rsort($array);
        echo "<p>Scores:</p>";
        foreach ($array as $score) {
            if($score != ""){
            echo "<li>";
            echo "<h3>".$score."</h3>";
            echo "</li>";
        }
    }
    ?>
    </ol>
	</div>
    <a href="start.php" class="button">Restart</a>
</body>
</html>