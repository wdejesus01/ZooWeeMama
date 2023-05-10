<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Purchases</title>
    <h1>Purchases created:</h1>
</head>
<body>
<?php
require_once 'Config.php';
$query="Select * from PURCHASES";
$d=$PDO->query($query);
?>

<table border="3" cellpadding="5" cellspacing="5" align="center">
<tr>
    <th>Store_Name</th>
    <th>Item_ID</th>
    <th>Order_ID</th>
    <th>Visitor_ID</th>
</tr>
    <?php
    foreach($d as $data)
    {
    ?>
    <tr>
        <td><?php echo $data['Store_Name'] ?></td>
        <td><?php echo $data['Item_ID'] ?></td>
        <td><?php echo $data['Order_ID'] ?></td>
        <td><?php echo $data['Visitor_ID'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<form action="Create_Purchase.html.php">
    <button type="submit" class="button">GO BACK</button>
</form>
    
</body>
</html>
