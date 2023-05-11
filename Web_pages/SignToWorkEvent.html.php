<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Sign Up To Work Event
    </title>
    <h1>Sign Up To Work Event</h1>
</head>

<body>
<div>
    <form action="SignToWorkEvent.html.php" method="post">
        <label for="Event_Name">Event_Name
            <br>
            <input type="text" name="Event_Name"
        </label>
        <br>
        <label for="Employee_Name">Employee_Name
            <br>
            <input type="text" name="Employee_Name"
        </label>
        <br>
        <label for="Employee_ID">Employee_ID
            <br>
            <input type="text" name="Employee_ID"
        </label>
        <br>
        <input type="submit" value="Sign_Up" name="Sign_Up">
    </form>
    <br><br>
    <?php
    require_once '../PHP/Config.php';
    $query="Select * from EVENT";
    $d=$PDO->query($query);
    ?>

    <table border="3" cellpadding="5" cellspacing="5" align="center">
        <tr>
            <th>Name</th>
            <th>Time</th>
            <th>Cost</th>
            <th>Capacity</th>
            <th>Building Name</th>
            <th>Department ID</th>
        </tr>
        <?php
        foreach($d as $data)
        {
            ?>
            <tr>
                <td><?php echo $data->name ?></td>
                <td><?php echo $data-> time  ?></td>
                <td><?php echo $data-> cost ?></td>
                <td><?php echo $data-> capacity ?></td>
                <td><?php echo $data-> b_name ?></td>
                <td><?php echo $data-> Dep_ID ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <?php
    require_once '../PHP/Config.php';
    if(isset($_POST['Event_Name'])
        &&isset($_POST['Employee_ID'])){
        $Query2='INSERT INTO WORKS_EVENT VALUES ' .
            "(:Event_Name,:Employee_ID);";
        $stmt2=$PDO->prepare($Query2);
        $stmt2->execute(['Event_Name'=>$_POST['Event_Name'],
            'Employee_ID'=>$_POST['Employee_ID']]);
    }
    ?>
</div>


</body>

</html>