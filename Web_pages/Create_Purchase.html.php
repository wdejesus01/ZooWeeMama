<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Purchase</title>
  <h1>Create Purchase</h1>
</head>

<body>
<div>
  <form action="Create_Purchase.html.php" method="post">
    <label for="Store_Name">Store_Name
      <br>
      <input type="text" name="Store_Name"
    </label>
      <br>
    <label for="Item_ID">Item_ID
      <br>
      <input type="text" name="Item_ID"
    </label>
      <br>
    <label for="Order_ID">Order_ID
      <br>
      <input type="text" name="Order_ID"
    </label>
      <br>
    <label for="Visitor_ID">Visitor_ID
      <br>
      <input type="text" name="Visitor_ID"
    </label>
      <br>
    <input type="submit" value="Create Purchase" name="Create Purchase">
  </form>
  <br><br>

  <form action="view_purchases.html">
    <button type="submit" class="button">VIEW PURCHASES</button>
  </form>
</div>


</body>
</html>
<?php
require_once 'Config.php';
if(isset($_POST['Store_Name'])
    &&isset($_POST['Item_ID'])
    &&isset($_POST['Order_ID'])
    &&isset($_POST['Visitor_ID'])){
  $Query='INSERT INTO PURCHASES VALUES ' .
      "(:Store_Name,:Item_ID,:Order_ID,:Visitor_ID);";
  $stmt=$PDO->prepare($Query);
  $stmt->execute(['Store_Name'=>$_POST['Store_Name'],'Item_ID'=>$_POST['Item_ID']]);
}
?>
