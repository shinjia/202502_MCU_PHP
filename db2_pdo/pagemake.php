<?php

function pagemake($content='', $head='') {  
    $html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>db_pdo2</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="___style.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


{$head}
</head>
<body>

<div class="container">
    <div id="header">
        <h1>後台資料庫管理 db2_pdo</h1>
    </div>
    
    <div id="nav">     
        | <a href="index.php" target="_top">首頁</a>
        | <a href="page.php?code=note2">說明</a> 
        | <a href="list_page.php" class="btn btn-primary">資料列表</a>
        | <a href="add.php" class="btn btn-danger">新增記錄</a>
    </div>
    
    <div id="main">
        {$content}
    </div>

    <div id="footer">
        <p>版權聲明</p>
    </div>

</div>


<!-- Bundle: Popper.js + Bootstrap JS -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>  
HEREDOC;

echo $html;
}

?>