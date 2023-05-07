<?php session_start();
require_once '../../PHP/Check_Session.php'
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Manager</title>

</head>
<body>
<h2>Hello <?php echo $_SESSION['User']->name . '<br> What would you like todo today?' ?> </h2>


<div>


    <form action= "Manager.php" method=post>
        <input type="submit" name="Events" value='Manage Events'>
        <br>
        <input type="submit" name="Employee" value="Manage Employee's">
        <br>
        <br>
        <br>
        <input type="submit" value="Log out">
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['Events'])) {
            header('location: Manager_Events.phtml');
        } else if (isset($_POST['Employee'])) {
            header('location: Manager_Employees.php');
        }
        else{
            session_destroy();
            header('location: ../Log_in.html.php');
        }
            }
    exit();
   ?>
</div>
</body>