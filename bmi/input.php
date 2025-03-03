<?php
$type = $_GET['type'] ?? '';
$h = $_GET['h'] ?? '';
$w = $_GET['w'] ?? '';

$msg = '';
if($type=='ERROR') {
    $msg = '資料有錯，請重新輸入!!!';
}

$def_height = $h;
$def_weight = $w;


$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>BMI身體質量指數</h1>
<form method="post" action="calc.php">
<p>身高：<input type="text" name="height" size="2" value="{$def_height}"> 公分</p>
<p>體重：<input type="text" name="weight" size="2" value="{$def_weight}"> 公斤</p>
<p><input type="submit" value="提交"></p>
<p>{$msg}</p>
</form>

</body>
</html>
HEREDOC;

echo $html;
?>