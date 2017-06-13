<?php

  require_once("./dbdb.php");
  // $link = create_connection();
  $tableName = "orders";
  $sql_query = "SELECT * FROM $tableName ORDER BY id ASC";
  $result = $db_link->query($sql_query);


  $products_all = array();
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $products_all[] = $row;
      }
  }else {
      echo "0 results";
  }

  $db_link->close();

  echo json_encode($products_all);
?>
