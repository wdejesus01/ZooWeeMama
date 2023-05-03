
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>ZooWeeMama</title>
    </head>
    <h1>ZooWeeMama</h1>
    <body>
    <div>
    <form action="Log_in.html.php" method="post">
        <label for="Username"  >Username
        <br>
        <input type = "text" name="Username" placeholder="UserName">
        </label>
        <br>
        <label for="password">Password
        <br>
        <input type="password" name = "Password" placeholder="Password">
        </label>
        <br>
        <input type="submit" value="Log On" name="Log On">
    </form>
    </div>
    <?php


    if(isset($_POST['Username']) && isset($_POST['Password'])) {

        require_once '../PHP/Config.php';

            $Query = 'SELECT * FROM EMPLOYEE AS E WHERE E.username = :username AND E.password= :password LIMIT 1';
            $stmt = $PDO->prepare($Query);
            $stmt->execute(['username' => $_POST['Username'], 'password' => $_POST['Password']]);
            $row = $stmt->fetch();



    if (empty($row)) {
        echo 'Username and password don\'t exist, try again';
    }
    else
    {
        echo $row -> username . '<br>'. $row->password;
    }


    session_start();
}
    ?>
    </body>

