<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./dbdb.php");
$id = $_POST['idd'];

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$img = $_POST['image'];


//搜尋資料庫資料
// $sql_query = "SELECT * FROM `manager` where username = '$username'";

$sql_query = "UPDATE `products` SET `name` = '$name', `description` = '$description', `price` = '$price', `image` = '$img' WHERE `products`.`id` = '$id'";

$result = $db_link->query($sql_query);


$db_link-> close();


?>
