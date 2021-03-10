<?php
        $file = 'accounts.html';
        $current = file_get_contents($file);
        $pattern = "/" . $_POST['Username'] . ", " . $_POST['Password'] . "/";

        if(preg_match($pattern, $current) == 1){
            header("location:hangman.php");
        } else{
            echo "Invalid Username or Password <br>
                  <a href='login.php'> Try again. </a>";

        }
    ?>