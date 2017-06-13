<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./dbdb.php");
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$img = $_POST['image'];


//搜尋資料庫資料
// $sql_query = "SELECT * FROM `manager` where username = '$username'";

$sql_query = "INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `inventory`, `dead_line`, `now_price`) VALUES (NULL, '$name', '$description', '$price', '$img', '1', NULL, NULL)";
$result = $db_link->query($sql_query);


$db_link-> close();

          header('Location: product.php');

?>
