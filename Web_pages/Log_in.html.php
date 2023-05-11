<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ZooWeeMama</title>
</head>
<h1>ZooWeeMama</h1>
<for>
<div>
    <form action="Log_in.html.php" method="post">
        <label for="Username">Username
            <br>
            <input type="text" name="Username" placeholder="UserName">
        </label>
        <br>
        <label for="password">Password
            <br>
            <input type="password" name="Password" placeholder="Password">
        </label>
        <br>
        <input type="submit" value="Log On" name="Log On">
    </form>
</div>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Username']) && isset($_POST['Password'])) {

        require_once '../PHP/Config.php';

        $Query = 'SELECT *  FROM EMPLOYEE AS E WHERE E.password = :password AND E.username = :username LIMIT 1';
        $stmt = $PDO->prepare($Query);
        $stmt->execute(['password' => $_POST['Password'], 'username' => $_POST['Username']]);
        $password = $stmt->fetch();

        if (empty($password)) {
            echo 'Password or username does not exist<br>';
        }
        else {

            session_start();
            $_SESSION['User'] = $password;
            $_SESSION['LoggedIn.ZooWeeMama']= True;
            $PDO = NULL;

            switch ($_SESSION['User']->permission) {
                case 1:
                    header('location: EmployeePage.html.php');
                    break;
                case 2:
                    header('location: ManagerPages/Manager.php');
                    break;
                default:
                    echo "What the hell did you do?<br>";
                    break;
            }
        }
    }
}
?>
<form action = "Log_in.html.php" method = post>
<input type ="submit" name = Go_Back value = "Go Back">
</form>

    <?php
    if(isset($_POST['Go_Back']))
    {
        header('Location: Customers.html') ;
    }
    ?>
</body>

