<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
</head>
<body>
    <h1>Create an Account</h1>
    <form name="Signup" action="signup-submit.php" method="POST">
        Username: <input type="text" name="Username"> <br>
        Password: <input type="password" name="Password"> <br>
        <button type="submit" onclick="location='login.php'">Submit</button>
    </form>
</body>
</html>