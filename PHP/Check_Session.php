<?php if (empty($_SESSION['LoggedIn.ZooWeeMama']))
{
    session_destroy();
    echo "<h1>You are not logged in</h1>
           <br>
           <h1>Redirecting you to Log in page<h1>";
    echo "<script>setTimeout(\"location.href = '../Log_in.html.php';\",1500);</script>";
    exit();
}
?>