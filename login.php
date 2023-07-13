<?php
require_once('init.php');

$login = new login();
$login->login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Log In</header>
        <form action="" method="POST" onsubmit="return validateLoginForm()">
        
        <div class="field input">
            <label>Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your Username"><br>
        </div>

        <div class="field input">
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your Password"><br>
        </div> 
        
        <div class="field">
            <div class="button">
                <input type="submit" class="btn" name="submit" value="Log In">
            </div>

        <div class="link">
        <p>don't have account? <a class="sign" href="signup.php">Sign Up</a></p>
        </div> 
        </div> 

    </form>
        </div>
    </div>

    <script src="index.js"></script>
</body>
</html>