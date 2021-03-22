<?php 
  session_save_path("./");
  session_start(); 
  if (!isset($_SESSION['logins'])) {
  	$_SESSION['logins'] = array('tester1' => '123456','Admin' => 'password1','ABC' => 'password2');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="Frame0">
    <h1>Login</h1>

  </div>
  <br>
  <form action="login-submit.php" method="post" name="Login_Form">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
      <?php if(isset($_SESSION['msg'])){?>
      <tr>
        <td colspan="2" align="center" valign="top"><?php echo $_SESSION['msg'];?></td>
      </tr>
      <?php } ?>
      <tr>
        <td>Username:</td>
        <td><input name="Username" type="text" class="Input"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input name="Password" type="password" class="Input"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
      </tr>
    </table>
  </form>
  <center> Don't have an account? Create an account <a href="signup.php">here.</a></center>
</body>
</html>