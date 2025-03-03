<?php

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>檢測BMI</h1>

<form method="post" action="calc.php">

<p>身高：<input type="text" name="height"></p>
<p>體重：<input type="text" name="weight"></p>
<p><input type="submit" value="送出"></p>


</form>

</body>
</html>
HEREDOC;

echo $html;
?>