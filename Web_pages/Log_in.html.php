<?php

include_once '../PHP/Config.php';
?>
<!DOCTYPE html>
<html = en>
    <head>
        <meta charset="UTF-8">
        <title>ZooWeeMama</title>
    </head>
    <h>ZooWeeMama</h>
    <body>
    <div>
    <form action="Log_in.html.php" method="post">
        <label for="Username"  >Username </label>
        <br>
        <input type = "text" name="Username" placeholder="UserName">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name = "Password" placeholder="Password">
        <br>
        <input type="submit" value="Log On" name="Log On">
    </form>
    </div>
    <?php

    if(isset($_POST["Username"] ) && isset($_POST['Password']))
    {
        $Query = 'SELECT 1 FROM EMPLOYEE AS E WHERE E.username = :username AND E.password= :password';
        $Query = $PDO -> prepare($Query);
        $Query = $Query -> execute(['username' => $_POST['Username'], 'password' => $_POST['Password']]);
        $Query = $Query->fetch();



    }

    else {
        echo 'Name or Password does not exist';
    }

    session_start();

    $_SESSION['Privilege']= $Query -> permission;
    if($_SESSION['Privilege']=2)
    {
        header('Location: ../Web_pages/EmployeePage.html.php');
    }
    ?>
    </body>

</html>