<?php

$nickname = $_POST['nickname'] ?? 'xxx';
$comment = $_POST['comment'] ?? '';

$now = date('Y-m-d H:i:s', time());

$data = <<< HEREDOC
時間：{$now}
姓名：{$nickname}
留言內容：{$comment}
--------------------------------------------

HEREDOC;

// 存檔(1)
// file_put_contents('data.txt', $data, FILE_APPEND);


// 存檔(2)
$filename = 'save/data_' . date('Ymd') . '.txt'; // 檔名

if(!file_exists($filename)) {
    file_put_contents($filename, '');
}

$old = file_get_contents($filename);
$new = $data . $old;
file_put_contents($filename, $new);


// 發mail
ini_set('SMTP','msa.hinet.net');
ini_set('smtp_port', 25);
ini_set('sendmail_from', 'xxxxx@xxx.xxx');


$to = 'shinjia168@gmail.com';
$title = 'Hello mail test';
$content = $data;

@mail($to, $title, $content);



$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>已收到</p>    

<hr />
</body>
</html>
HEREDOC;

echo $html;
?>