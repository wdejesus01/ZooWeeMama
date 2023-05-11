<?php session_start();
require_once '../../PHP/Check_Session.php'
?>

<!DOCTYPE html>


<head>

    <meta charset="UTF-8">
    <title>Manager Employee's</title>

</head>

<body

<div>
<h1>
    Here are the options:
</h1>

    <div>
        <form class="Add a employee" action = 'Manager_Employees.php' method="post">
            <label for = "N_ID">ID:
                <input type="text" name = "N_ID">
                <br> </label>
                <label for = "N_Name">Name:
                    <input type = "text" name="N_Name">
                    <br>
                </label>
            <label for = "NPosition">Position:
                <input type = "text" name="N_Position">
                <br>
            </label>
            <label for = "N_Start_Date">
                Start Date: <input type="date" name="N_Start_Date">
                <br>
            </label>
            <label for = "N_Username">Username:
                <input type="text" name="N_Username">
                <br>
            </label>
            <label for = "N_Password">Password:
            <input type="password" name="N_Password">
                <br>
            </label>
            <label for = "N_Permission"> Permissions:
                <select name="N_Permission">
                    <option value = "1">Employee</option>
                    <option value = "2">Manager</option>
                </select>
            </label>
            <br>
            <label for = "N_DepNum">Department:

                <select name = "N_DepNum">
                    <?php
                    require_once '../../PHP/Config.php';
                    $query= "Select D.ID FROM DEPARTMENT AS D";
                    $stmt = $PDO -> prepare($query);
                    $stmt -> execute();
                    while ($row = $stmt -> fetch())
                    {
                        echo "<option value = " . $row ->ID  . ">" . $row -> ID . "</option>" ;
                    }
                    $stmt -> closeCursor();
                    ?>

                </select>
            </label>
            <br>
            <input type="submit" value = "Add Employee">
            <br>
        </form>
    </div>

    <form action="Manager_Employees.php" method="post">
    <?php
    $Query = "CALL Get_EMPLOYEES( :Identity )";
    $stmt= $PDO -> prepare($Query);
    $stmt -> execute(['Identity' => $_SESSION['User']-> d_no] );

    while  ($row = $stmt -> fetch() )
    {
        echo '<br>';
        echo 'Employee ID: ' . htmlspecialchars($row -> ID) . '<br>';
        echo 'Employee Name: ' . htmlspecialchars($row -> name) . '<br>';
        echo 'Employee position: ' . htmlspecialchars($row -> position ) . '<br>';
        echo 'Employee Start Date: ' . htmlspecialchars($row -> start_date) . '<br>';
        echo 'Employee username: '  . htmlspecialchars($row -> username) . '<br>';
        echo 'Employee permission: ' .htmlspecialchars($row -> permission) . '<br>';
        echo 'Employee department numbers :'. htmlspecialchars($row -> d_no ) . '<br>';
        echo '<input type = "Submit" name = "Fire_Employee" value = "Fire Employee"> <br>';
        echo '<input type = "hidden" name = "ID" value = "' . $row -> ID . '">';
    }
    $stmt ->closeCursor();


    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(isset($_POST['Fire_Employee']))
        {
            $query = 'DELETE FROM EMPLOYEE WHERE ID = :Identity ';
            $stmt = $PDO -> prepare($query);
            $stmt -> execute(['Identity' => $_POST['ID']]);
            header('Location: Manager_Employees.php');
        }
        $stmt -> closeCursor();
    }
    ?>

    </form>

    <?php
        if (isset($_POST['N_ID']) &&
            isset($_POST['N_Name']) &&
            isset($_POST['N_Position']) &&
            isset($_POST['N_Start_Date']) &&
            isset($_POST['N_Username']) &&
            isset($_POST['N_Password']) &&
            isset($_POST['N_Permission']) &&
            isset($_POST['N_DepNum'])) {
            $Query = 'INSERT INTO EMPLOYEE VALUES ( :ID , :name , :position , :start_date , :username , :password , :permission , :DepNum)';
            $stmt = $PDO->prepare($Query);
            $stmt->execute(['ID' => $_POST['N_ID'], 'name' => $_POST['N_Name'], 'position' => $_POST['N_Position']
                , 'start_date' => $_POST['N_Start_Date'], 'username' => $_POST['N_Username'], 'password' => $_POST['N_Password'],
                'permission' => $_POST['N_Permission'], 'DepNum' => $_POST['N_DepNum']]);
            $stmt->closeCursor();
            header('Location: Manager_Employees.php');
    }
    ?>


</div>



<br><br>

<form action="Manager_Employees.php" method="post">
<input type="submit" name = "Back" value = "Go Back">
</form>

<?php
if (isset($_POST["Back"]))
{
    header('Location: Manager.php');
}

?>









</body>