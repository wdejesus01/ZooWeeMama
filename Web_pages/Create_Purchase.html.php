<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Purchase</title>
    <h1>Create Purchase</h1>
</head>

<body>
<div>
    <form action="Create_Purchase.html" method="post">
        <label for="Store_Name">Store_Name
            <br>
            <input type="text" name="Store_Name" placeholder="Store_Name">
        </label>
        <br>
        <label for="Item_ID">Item_ID
            <br>
            <input type="text" name="Item_ID" placeholder="Item_ID">
        </label>
        <br>
        <label for="Order_ID">Order_ID
            <br>
            <input type="text" name="Order_ID" placeholder="Order_ID">
        </label>
        <br>
        <label for="Visitor_ID">Visitor_ID
            <br>
            <input type="text" name="Visitor_ID" placeholder="Visitor_ID">
        </label>
        <br>
        <input type="submit" value="Create Purchase" name="Create Purchase">

    </form>
</div>


</body>
</html>
<?php

if (isset($_POST['Store_Name']) && isset($_POST['Item_ID'])) {
    require_once 'testing.php';

    $Query = 'INSERT INTO PURCHASES(Store_Name,Item_ID)VALUES(:Store_Name,:Item_ID)';
    $stmt = $conn->prepare($Query);
    $data = (['Store_Name' => $_POST['Store_Name'],
        'Item_ID' => $_POST['Item_ID']]);

    $statement_execute = $stmt->execute($data);
