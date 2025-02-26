<?php

// 個人基本資料
/*
$name = '陳信嘉';
$birth = '1948/4/1';
$age = 25;
$pic = 'images/head1.jpg';
*/

$name = '阮經天';
$birth = '1995/12/7';
$age = 30;
$pic = 'images/head2.jpg';


$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>個人基本資料</title>
  <!-- 載入 Google 字體 -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* 基本重置 */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    /* 漸層背景動畫 */
    body {
      font-family: 'Noto Sans TC', sans-serif;
      background: linear-gradient(45deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    /* 內容容器 */
    .container {
      background: rgba(255, 255, 255, 0.85);
      padding: 2rem 3rem;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      text-align: center;
    }
    /* 標題動畫 */
    h1 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      opacity: 0;
      animation: fadeInDown 1s ease-out forwards;
    }
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    /* 文字淡入效果 */
    p {
      font-size: 1.2rem;
      margin-bottom: 1rem;
      opacity: 0;
      animation: fadeIn 1s ease-out forwards;
    }
    p:nth-of-type(1) { animation-delay: 0.5s; }
    p:nth-of-type(2) { animation-delay: 0.7s; }
    p:nth-of-type(3) { animation-delay: 0.9s; }
    p:nth-of-type(4) { animation-delay: 1.1s; }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    /* 圖片樣式與動畫 */
    img {
      border-radius: 50%;
      max-width: 150px;
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }
    img:hover {
      transform: scale(1.1);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>個人基本資料</h1>
    <p>姓名：{$name}</p>
    <p>生日：{$birth}</p>
    <p>年齡：{$age}</p>
    <p><img src="{$pic}" alt="個人照片"></p>
  </div>
</body>
</html>

HEREDOC;

echo $html;
?>