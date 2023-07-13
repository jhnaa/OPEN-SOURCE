<?php

require_once('init.php');

$update = new update();
$update->edit_user();

$view = new view();
$user = $view->view_details();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach($user as $users) { ?> 
    <form action="" method="POST" onsubmit="return validateSignUpForm()">
        <!-- <label>ID</label>
        <input type="text" name="id" id="id" placeholder="Enter your ID"><br> -->
        <input type="hidden" name="id_update" value="<?php echo $users['id']; ?>">
        <label>First Name</label>
        <input type="text" name="fname" id="fname" placeholder="Enter your Firstname"><br>
        <label>Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Enter your Lastname"><br>
        <label>Age</label>
        <input type="number" name="age" id="age" placeholder="Enter your Age"><br>
        <label>Phone Number</label>
        <input type="text" name="phone_num" id="phone_num" placeholder="Enter your Phone Number"><br>
        <label>Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your Username"><br>
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your Password"><br>
        <label>Access</label>
        <input type="text" name="access" id="access" placeholder="---"><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <?php }?>
    
</body>
</html>