<?php 
session_save_path("./");
session_start();
        $file = 'accounts.html';
        $current = file_get_contents($file);
            if (array_key_exists($_POST['Username'], $_SESSION['logins'])) {
                $_SESSION['error'] = "<span style='color:red'>This username has already been taken</span>";
                header("location:signup.php");
                exit();
            }
            else if (in_array($_POST['Password'], $_SESSION['logins'])) {
                $_SESSION['error'] = "<span style='color:red'>This password has already been taken</span>";
                header("location:signup.php");
                exit();
            }
            else {
                $_SESSION['logins'][$_POST['Username']] = $_POST['Password'];
                $_SESSION['msg'] = "Account succesfully created";
                header("location:login.php");
                exit();
            }
    ?>