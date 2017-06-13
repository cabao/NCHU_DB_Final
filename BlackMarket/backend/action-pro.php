<?php
  // Setting Variable
  header('Content-Type: application/json');
  $tableName = "products";
  require_once("dbdb.php");


  // Inital GET Action Parameter
  $count = 0 ;
  foreach($_GET as $key => $value)
  {
    $KeyData[$count] = $key ;
    $ValueData[$count] = $value;
    $count++;
  }

  // 判斷 Action not is null
  if(empty($_GET["action"]))
  {
    echo 'action null';
  }
  else
    $action = $_GET["action"];

  // execute sql instruction
  switch ($action) {
      // case 'Insert':
      //     // Insert into products ("name", "description", "image", "price") values ()
      //     $stmt = $link->prepare("Insert into $tableName ($KeyData[1],$KeyData[2],$KeyData[3],$KeyData[4]) VALUES (?,?,?,?)");
      //     $stmt->bind_param("ssss", $ValueData[1],$ValueData[2],$ValueData[3],$ValueData[4]);
      //     $stmt->execute();
      //     break;
      case 'Delete':
          $id = $_GET['Id'];
          $sql_query = "Delete from $tableName Where id = $id";
          $db_link->query($sql_query);
          $db_link->close();
          header('Location: product.php');
          break;
      // case 'Update':
      //     $id = $_GET['id'];
      //
      //     $sql_query = "Update $tableName Set $KeyData[1] = ? ,$KeyData[2] = ?,$KeyData[3] = ? ,$KeyData[4] = ? Where id = $id";
      //     $db_link->query($sql_query);
      //     $db_link->close();
      //     header('Location: member.php');
      //
      //     break;
      // case 'Select':
      //     // echo "Select";
      //     $sql = "SELECT * FROM $tableName";
      //     break;
  }
  $db_link->close();

  header('Location: product.php');
?>
