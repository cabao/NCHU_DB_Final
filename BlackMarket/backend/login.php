<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./dbdb.php");
$user = $_POST['username'];
$username = md5($_POST['username']);
$passwd = md5($_POST['password']);

//搜尋資料庫資料
$sql_query = "SELECT * FROM `manager` where username = '$username'";


$result = $db_link->query($sql_query);
$arr;
while ($row_result = $result->fetch_row())
{
    foreach($row_result as $item=>$value)
    {
        if($item == 1)
            $arr[0] = $value;
        else if($item == 2)
            $arr[1] = $value;

    }


}

$db_link-> close();

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($username != null && $passwd != null && $arr[0] == $username && $arr[1] == $passwd)
{

        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['user'] = $user;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
}
else
{
        echo '登入失敗!';
        // echo $user;
        // echo $passwd."<br>";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
