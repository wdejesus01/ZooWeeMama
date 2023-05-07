<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ZooWeeMama</title>
</head>
<h1>ZooWeeMama</h1>
<body>
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


if (isset($_POST['Username']) && isset($_POST['Password'])) {

    require_once '../PHP/Config.php';

    $Query = 'SELECT E.username FROM EMPLOYEE AS E WHERE E.username = :username  LIMIT 1';
    $stmt = $PDO->prepare($Query);
    $stmt->execute(['username' => $_POST['Username']]);
    $username = $stmt->fetch();


    if (empty($username)) {
        echo 'Username does not exist<br>';
    }

    $Query = 'SELECT *  FROM EMPLOYEE AS E WHERE E.password = :password LIMIT 1';
    $stmt = $PDO->prepare($Query);
    $stmt->execute(['password' => $_POST['Password']]);
    $password = $stmt->fetch();

    if (empty($password)) {
        echo 'Password does not exist<br>';
    } else {
        echo $username->username . '<br>' . $password->password;

        session_start();
        $_SESSION['User'] = $password;
        $PDO = NULL;

        switch ($_SESSION['Credentials']) {
            case 1:
                header('location: EmployeePage.html.php');
                break;
            case 2:
                header('location: Manager.php');
                break;
            default:
                echo "What the hell did you do?<br>";
                break;
        }
    }
}
?>
</body>

