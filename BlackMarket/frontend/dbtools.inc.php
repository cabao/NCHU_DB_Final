<?php
header("Content-Type: text/html; charset=utf-8");
  function create_connection()
  {
    $conn = new mysqli("localhost", "root", "shue4828", "blackmarket");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
else
echo " SSS";
    // Set UTF-8
     mysqli_set_charset($conn,"utf8");
    return $conn;
  }
?>
