<?php

$a = mt_rand(1, 9);
$b = mt_rand(1, 9);

$pic1 = 'images/' . $a . '.jpg';
$pic2 = 'images/' . $b . '.jpg';


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>九九乘法CAI練習</title>
</head>
<body>
<h1>九九乘法CAI練習</h1>
<p>
    <img src="{$pic1}">
    <img src="images/mul.jpg">
    <img src="{$pic2}">
</p>

<p><a href="question.php">換一題</a> |
 <a href="answer.php?a={$a}&b={$b}">看答案</a></p>

 <hr/>

<form method="get" action="https://www.google.com/search">
   <p>查詢：<input type="text" name="q" value="數學乘法運算">
   <input type="submit" value="送出"></p>
</form>

</body>
</html>
HEREDOC;

echo $html;
?>