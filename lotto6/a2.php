<?php
$min = 1;
$max = 42;
$total = 6;

$a_box = array();  // 產生空陣列

for($i=1; $i<=$total; $i++) {
    $num = mt_rand($min, $max);
    $a_box[] = $num;
}


// 顯示在畫面上
$str = '';  // 文字顯示
$pic = '';  // 圖片顯示
foreach($a_box as $value) {
    $str .= $value . ', ';
    $pic .= '<img src="images/' . $value . '.jpg">';
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>{$str}</p>
<p>{$pic}</p>
</body>
</html>
HEREDOC;

echo $html;
?>