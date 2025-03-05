<?php
$min = 1;
$max = 12;
$total = 6;

$a_box = array();  // 產生盒子
$check = '';
for($i=1; $i<=$total; $i++) {
    do {
        $num = mt_rand($min, $max);  // 抽一個球
        $check .= $num . ', ';
    } while(in_array($num, $a_box));
    // $a_box 裡有 $num

    $a_box[] = $num;  // 放入盒子
}

sort($a_box);  // 由小排到大

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
<p>抽出的數字 {$check}</p>
<p>{$str}</p>

<p>{$pic}</p>
</body>
</html>
HEREDOC;

echo $html;
?>