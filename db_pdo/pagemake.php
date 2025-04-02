<?php

function pagemake($content='', $head='') {  
    $html = <<< HEREDOC
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的網站</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
        nav {
            display: flex;
            justify-content: center;
            background: #333;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 18px;
        }
        nav a:hover {
            background: #575757;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        footer {
            background: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="網站Logo" style="height: 50px; vertical-align: middle;"> 我的網站
    </header>
    <nav>
        <a href="index.php" target="_top">首頁</a>
        <a href="page.php?code=note2">說明</a>
        <a href="list_page.php">資料列表</a>
    </nav>
    <main>
{$content}
    </main>
    <footer>
        &copy; 2025 我的網站. 保留所有權利。
    </footer>
</body>
</html>

HEREDOC;

echo $html;
}

?>