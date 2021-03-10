<?php
        $file = 'accounts.html';
        $current = file_get_contents($file);
        if(preg_match("/" . $_POST['Username'] . "/", $current) == 0){
            $current = $current . $_POST['Username'] . ", " . $_POST['Password'] . "\n";
            file_put_contents($file,$current);
            header("location:login.php");
        } else{
            echo "This usernme has already been taken <br>
                  <a href='createaccount.php'> Try again. </a>";
        }
    ?>