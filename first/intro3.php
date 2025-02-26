<?php

// 設定 10 位模擬人物的資料
$people = [
    ["name" => "王大明", "birth" => "1985/06/15", "pic" => "images/head1.jpg"],
    ["name" => "李小華", "birth" => "1992/03/22", "pic" => "images/head2.jpg"],
    ["name" => "張美麗", "birth" => "1998/10/05", "pic" => "images/head3.jpg"],
    ["name" => "陳冠宇", "birth" => "2000/01/30", "pic" => "images/head4.jpg"],
    ["name" => "黃怡君", "birth" => "1989/12/09", "pic" => "images/head5.jpg"],
    ["name" => "林志豪", "birth" => "1995/08/17", "pic" => "images/head6.jpg"],
    ["name" => "何文哲", "birth" => "1987/04/25", "pic" => "images/head7.jpg"],
    ["name" => "周佩珊", "birth" => "1999/07/13", "pic" => "images/head8.jpg"],
    ["name" => "孫立翔", "birth" => "1990/11/03", "pic" => "images/head9.jpg"],
    ["name" => "鄭曉婷", "birth" => "2002/05/29", "pic" => "images/head10.jpg"]
];

// 計算年齡
foreach ($people as $key => $person) {
    $birth_date = new DateTime($person["birth"]);
    $today = new DateTime();
    $age = $today->diff($birth_date)->y;
    $people[$key]["age"] = $age;
}

// 取得目前頁碼（預設為 1）
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 3; // 每頁顯示 3 個人物
$totalPages = ceil(count($people) / $perPage); // 計算總頁數

// 限制頁碼範圍
if ($page < 1) {
    $page = 1;
} elseif ($page > $totalPages) {
    $page = $totalPages;
}

// 計算當前頁面要顯示的人物範圍
$startIndex = ($page - 1) * $perPage;
$selectedPeople = array_slice($people, $startIndex, $perPage);

// 生成 HTML
$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>模擬 10 位人物 - 分頁功能</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Noto Sans TC', sans-serif;
      background: linear-gradient(45deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
    }
    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .container {
      background: rgba(255, 255, 255, 0.85);
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      text-align: center;
      margin: 1rem;
      width: 300px;
    }
    h1 {
      font-size: 2rem;
      margin-bottom: 1rem;
    }
    p {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }
    img {
      border-radius: 50%;
      max-width: 100px;
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }
    img:hover {
      transform: scale(1.1);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    .wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .pagination {
      margin-top: 20px;
    }
    .pagination a {
      text-decoration: none;
      font-size: 1.2rem;
      padding: 10px 15px;
      margin: 0 5px;
      background: #ff758c;
      color: white;
      border-radius: 5px;
      transition: background 0.3s ease;
    }
    .pagination a:hover {
      background: #ff5e62;
    }
    .pagination .disabled {
      background: #ddd;
      cursor: not-allowed;
    }
  </style>
</head>
<body>
  <h1>模擬 10 位人物</h1>
  <div class="wrapper">
HEREDOC;

// 動態生成當前頁面的人物資訊
foreach ($selectedPeople as $person) {
    $html .= <<< PERSON
    <div class="container">
      <p>姓名：{$person["name"]}</p>
      <p>生日：{$person["birth"]}</p>
      <p>年齡：{$person["age"]}</p>
      <p><img src="{$person["pic"]}" alt="個人照片"></p>
    </div>
PERSON;
}

// 分頁功能
$prevPage = $page - 1;
$nextPage = $page + 1;

$html .= '<div class="pagination">';
if ($page > 1) {
    $html .= "<a href='?page=$prevPage'>上一頁</a>";
} else {
    $html .= "<span class='disabled'>上一頁</span>";
}
if ($page < $totalPages) {
    $html .= "<a href='?page=$nextPage'>下一頁</a>";
} else {
    $html .= "<span class='disabled'>下一頁</span>";
}
$html .= '</div>';

$html .= <<< HEREDOC
  </div>
</body>
</html>
HEREDOC;

echo $html;
?>
