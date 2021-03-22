<?php 
    session_save_path("./");
    session_start();
    if(isset($_POST['Submit'])){
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';  
        if (isset($_SESSION['logins'][$Username]) && $_SESSION['logins'][$Username] == $Password){
            $_SESSION['UserData']['Username'] = $_SESSION['logins'][$Username];
            $_SESSION['username'] = $Username;
            header("location:start.php");
            exit;
        } else {
            $_SESSION['msg'] = "<span style='color:red'>Invalid Login Details</span>";
            header("location:login.php");
            exit();
        }
    }
    ?>