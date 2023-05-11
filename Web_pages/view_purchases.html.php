<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Purchases</title>
    <h1>Purchases created:</h1>
</head>
<body>
<?php
require_once '../PHP/Config.php';
$query="Select * from PURCHASES";
$d=$PDO->query($query);
?>

<table border="3" cellpadding="5" cellspacing="5" align="center">
<tr>
    <th>Store_Name</th>
    <th>Item_ID</th>
    <th>Visitor_ID</th>
</tr>
    <?php
    foreach($d as $data)
    {
    ?>
    <tr>
        <td><?php echo $data['s_name'] ?></td>
        <td><?php echo $data['i_id'] ?></td>
        <td><?php echo $data['v_id'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<br>
<form action="Create_Purchase.html.php">
    <button type="submit" class="button">GO BACK</button>
</form>
</body>
</html>