<?php

$height = $_POST['height'] ?? '';
$weight = $_POST['weight'] ?? '';

// 驗證輸入是否為數字
if (!is_numeric($height) || !is_numeric($weight) || $height <= 0 || $weight <= 0) {
    $url = 'input.php?type=ERROR&h=' .  $height . '&w=' . $weight;
    // echo '請輸入有效的數字！';
    // echo '<a href="' . $url . '">重新輸入</a>';
    // exit;
    header('location: '. $url);
}


$h = $height/100;
$bmi = $weight / ($h*$h);

$bmi = round($bmi, 2);


// 判斷
if($bmi>=24) {
    $msg = '月巴月半';
}
elseif($bmi<24 && $bmi>=22) {
    $msg = '過重';
}
elseif($bmi<22 && $bmi>=17.5) {
    $msg = '正常';
}
elseif($bmi<17.5) {
    $msg = '太輕';
}
else {
    $msg = '程式一定出錯了';
    die($msg);
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
<p>你的BMI值是 {$bmi}</p>
<p>{$msg}</p>
<hr/>
height: {$height}   <br> 
weight: {$weight}   
</body>
</html>
HEREDOC;

echo $html;
?>