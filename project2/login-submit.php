<?php 
    session_save_path("./");
    session_start();
    /* Check Login form submitted */    
    if(isset($_POST['Submit'])){
        /* Check and assign submitted Username and Password to new variable */
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
        
        /* Check Username and Password existence in defined array */        
        if (isset($_SESSION['logins'][$Username]) && $_SESSION['logins'][$Username] == $Password){
            /* Success: Set session variables and redirect to Protected page  */
            $_SESSION['UserData']['Username'] = $_SESSION['logins'][$Username];
            $_SESSION['username'] = $Username;
            header("location:start.php");
            exit;
        } else {
            /*Unsuccessful attempt: Set error message */
            $_SESSION['msg'] = "<span style='color:red'>Invalid Login Details</span>";
            header("location:login.php");
            exit();
        }
    }
    ?>