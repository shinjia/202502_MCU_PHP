<?php
$min = 1;
$max = 42;
$total = 6;

$str = '';
$pic = '';
for($i=1; $i<=$total; $i++) {
    $num = mt_rand($min, $max);
    $str .= $num . ', ';
    $pic .= '<img src="images/' . $num . '.jpg">';
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