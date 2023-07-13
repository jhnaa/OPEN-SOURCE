<?php
require_once('init.php');

$session = new login();
$session->get_session();

$view = new view();
$user = $view->view_details();

$delete = new delete();
$delete->delete();

$update = new update();
$update->update();



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
    
    <table border="3" cellpadding="5" cellspacing="5" align="center">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Username</th>
            <th>Password</th>
            <th>Access</th>
            <th>Action</th>
        </tr>
        <?php foreach($user as $users){?>
        <tr>
            <td><?php echo$users['firstname']; ?></td>
            <td><?php echo$users['lastname']; ?></td>
            <td><?php echo$users['age']; ?></td>
            <td><?php echo$users['phone_number']; ?></td>
            <td><?php echo$users['username']; ?></td>
            <td><?php echo$users['password']; ?></td>
            <td><?php echo$users['access']; ?></td>
            <td>
                <form method="POST" style="display: inline-block">
                    <input type="hidden" name="id_update" value="<?php echo $users['id']; ?>">
                    <input type="submit" name="submit_update" value="Update">
                </form>
                <form method="POST" style="display: inline-block">
                    <input type="hidden" name="id_delete" value="<?php echo $users['id']; ?>">
                    <input type="submit" name="submit_delete" value="Delete">
                </form>
            </td>
        </tr>
        <?php }?>
    </table>

</body>
</html>