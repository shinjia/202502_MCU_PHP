<?php

// 個人基本資料
$name = '陳信嘉';
$birth = '1948/4/1';
$age = 25;
$pic = 'images/head1.jpg';

/*
$name = '阮經天';
$birth = '1995/12/7';
$age = 30;
$pic = 'images/head2.jpg';
*/


$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>個人基本資料</title>
</head>
<body>
  <h1>個人基本資料</h1>
  <p>姓名：{$name}</p>
  <p>生日：{$birth}</p>
  <p>年齡：{$age}</p>
  <p><img src="{$pic}"></p>
</body>
</html>

HEREDOC;

echo $html;
?>