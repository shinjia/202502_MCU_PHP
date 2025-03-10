<?php
$link = mysqli_connect('localhost', 'root', '', 'class');

// 寫出 SQL 語法 
// $sqlstr = "INSERT INTO person(usercode, username, address, birthday, height, weight, remark) VALUES ('P999', 'Shinjia', '', '1985-4-6', '170', '65', 'A')";
$sqlstr = "UPDATE person SET height=190 WHERE uid=8";

// 執行SQL
mysqli_query($link, $sqlstr);

echo 'OK';
?>