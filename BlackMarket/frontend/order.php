<?php
  header('Content-Type: application/json');
  require_once("dbdb.php");

  // Inital GET Action Parameter
  $count = 0 ;
  foreach($_GET as $key => $value)
  {
    $KeyData[$count] = $key ;
    $ValueData[$count] = $value;
    $count++;
  }

//一次輸入一筆
  $sql = "INSERT INTO orders ($KeyData[0]) VALUES ($ValueData[0])";
  $db_link->query($sql);

//變更products存貨數量
  $sql = "SELECT inventory FROM products WHERE id = $ValueData[0]";
  $result = $db_link->query($sql);
  $inventory = 0;
  while($row = $result->fetch_assoc()) {
      $inventory = $row;
  }

  $number = $inventory[inventory] - 1;
  $sql = "UPDATE products Set inventory = $number Where id = $ValueData[0]";
  $db_link->query($sql);
  //
  $db_link->close();

  header('Location: index.html');
?>
