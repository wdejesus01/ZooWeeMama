<?php session_start() ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Manager</title>

</head>

<h2>Hello <?php echo $_SESSION['User']->name . '<br> What would you like todo today?' ?> </h2>


<div>

    <a href="'../PHP/Manager_Queries.php"></a>

    <form action="../../PHP/Manager_Queries.php" method=post>
        <input type="submit" value='Manage Events'>
        <br>
        <input type="submit" value="Manage Employee's">
        <br>
        <br>
        <br>
        <input type="submit" value="Log out">
    </form>
</div>