<!DOCTYPE html>
	<head>
		<title>leaderboard</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
    <h1>Leaderboard</h1>
    
    <div id="container" style="width:5%">
        <ol>
        <?php  
    	$array = explode("\n", file_get_contents('leaderboard.txt'));
        rsort($array);
        echo "<p>Score:</p>";
        foreach ($array as $score) {
            if($score != ""){
            echo "<li>";
            echo "<p><span>".$score."</span></p>";
            echo "</li>";
        }
    }
    ?>
    </ol>
	</div>
    <a href="start.php" class="button">HOME</a>
	</body>
</html>