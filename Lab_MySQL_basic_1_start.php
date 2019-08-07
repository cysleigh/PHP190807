<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器
$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
//var_dump($link);   //資源代號
$result = mysqli_query($link, "set names utf8");  //資料庫字碼設定
mysqli_select_db($link, "class"); //選擇特定資料庫

// 2. 執行 SQL 敘述
$commandText = "select * from students";
$result = mysqli_query($link, $commandText);

//測試查詢資料
//$row = mysqli_fetch_assoc($result);
//var_dump($row);

// 3. 處理查詢結果
while ($row = mysqli_fetch_assoc($result)){
   echo "ID：{$row['cID']}<br>";
   echo "Name：{$row['cName']}<br>";
   echo "<HR>";
}

// 4. 結束連線
// mysqli_close($link);

echo "<br />-- Done --";
?>
