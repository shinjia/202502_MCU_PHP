<?php
// 取得前網頁傳入的資料
$height = $_POST['height'] ?? 1;
$weight = $_POST['weight'] ?? 0;
// $height = $_POST['height'];


// 計算 BMI
$bmi = ($weight) / (($height/100) * ($height/100));
// $bmi = $weight / pow(($height/100),2);
// $bmi = $weight / (($height/100) ** 2);


// 取兩位小數
$bmi = round($bmi, 2);
// $bmi = number_format($bmi, 2);
// $bmi = floor($bmi*100) / 100;


// 判斷
if($bmi>=24) {
	$msg = '月巴月半';
	$pic = 's1.jpg';
	$url = 'page1.html';
}
elseif( $bmi<24 && $bmi>=22 ) {
	$msg = '過重';
	$pic = 's2.jpg';
	$url = 'page2.html';
}
elseif( $bmi<22 && $bmi>=17.5 ) {
	$msg = '正常';
	$pic = 's3.jpg';
	$url = 'page3.html';
}
elseif( $bmi <17.5 ) {
	$msg = '太輕';
	$pic = 's4.jpg';
	$url = 'page4.html';
}
else {
	$msg = '程式一定出錯了';
	echo $msg;
	exit;
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>你的BMI值為 {$bmi}</h1>
<h2>{$msg}</h2>
<p><img src="images/{$pic}"></p>
<p>建議 <a href="{$url}">點此處</a></p>
<iframe src="{$url}" width="600" height="300"></iframe>
<p><a href="input.php">重新輸入</a></p>
<hr>
<p>H:{$height}</p>
<p>W:{$weight}</p>

</body>
</html>
HEREDOC;

echo $html;
?>