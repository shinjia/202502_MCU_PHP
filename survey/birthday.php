<?php

// 處理年的選項
$yy = '';
$begin_year = 1950;
$end_year = date('Y',time());
for($i=$end_year; $i>=$begin_year; $i--) {
    $yy .= "<option>$i</option>\n";  // 雙引號會置換變數的值
}
/*
for($i=$begin_year; $i<=$end_year; $i++) {
    $yy .= "<option>$i</option>\n";  // 雙引號會置換變數的值
}
*/

// 處理月的選項
$mm = '';
for($i=1; $i<=12; $i++) {
    // $mm .= '<option>' . $i . '</option>' . "\n";
    $mm .= "<option>$i</option>\n";  // 雙引號會置換變數的值
}

// 處理日的選項
$dd = '';
for($i=1; $i<=31; $i++) {
    // $dd .= '<option>' . $i . '</option>';
    $dd .= "<option>$i</option>\n";  // 雙引號會置換變數的值
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

<h1>請輸入生日</h1>
<form method="post" action="birthday_x.php">
<p>生日 
<select>
{$yy}
</select>

年

<select>
{$mm}
</select>

月

<select>
{$dd}
</select>
日
</p>
<p><input type="submit" value="送出"></p>
</form>

</body>
</html>
HEREDOC;

echo $html;
?>