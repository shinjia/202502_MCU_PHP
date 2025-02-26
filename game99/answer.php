<?php

$a = $_GET['a'] ?? '';
$b = $_GET['b'] ?? '';

$ans = $a * $b;

// 圖形版本
$n1 = $ans % 10;  // 個位數
$n2 = floor($ans/10);

$pic_n1 = '<img src="images/' . $n1 . '.jpg">';
$pic_n2 = '<img src="images/' . $n2 . '.jpg">';

if($ans<10) {
    $pic = $pic_n1;
}
else {
    $pic = $pic_n2 . $pic_n1;
}

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>九九乘法CAI練習</title>
</head>
<body>
<h1>九九乘法CAI練習</h1>
<p>{$pic}</p>
<p><a href="question.php">換下一題</a></p>
<hr />

{$a} x {$b} = {$ans}
</body>
</html>
HEREDOC;

echo $html;
?>