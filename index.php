<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP</title>
<base target="_blank">
<style>
h2 { background-color: #FF8800; color:#FFFF00; }    
</style>
</head>
<body>
<h1>PHP 老師上課實作</h1>
<p><a href="https://hackmd.io/@Shinjia/rkUYaFO5yl">上課教學網頁</a></p>

<div class="hot" style="background-color:rgb(235, 216, 189); padding:5px;">
    <p>(快速連結) db_系列程式：|
        <a href="db_mysqli/">db_mysqli</a> |
        <a href="db_ext2/">db_ext2</a> |
        <a href="db_pdo/">db_pdo</a> |
    </p>
</div>




<h2>Class 05 (2025/03/10)</h2>

<p>PHP 連結 MySQL 的程式測試 (db_test)</p>
<ul>
    <li>查看原始碼：[<a href="show_source.php?dir=db_test&amp;file=test1.php">db_test/test1.php</a>]</li>
</li>
</ul>

<p>&nbsp;</p>





<h2>Class 04 (2025/03/05)</h2>

<p>Survey (迴圈概念)</p>
<ul>
    <li>程式執行 <a href="survey/birthday.php">birthday.php</a> </li>
    <li>查看原始碼：表單輸入 [<a href="show_source.php?dir=survey&amp;file=birthday.php">birthday.php</a>]</li>
    <li>查看原始碼：計算結果 [<a href="show_source.php?dir=survey&amp;file=birthday_x.php">birthday_x.php</a>]</li>
</ul>

<p>線上問卷調查 (survey)</p>
<ul>
    <li>v1 程式執行 <a href="survey/v1/input.php">input.php</a> </li>
    <li>v2 程式執行 <a href="survey/v2/input.php">input.php</a> </li>
</ul>

<p>陣列的用法</p>
<ul>
    <li>程式請見目錄內各檔案 <a href="array/">array</a></li>
</ul>

<p>六個幸運樂透數字 (lotto6)</p>
<ul>
    <li>-----複習------------------</li>
    <li><a href="lotto6/lucky1.php">lucky1.php</a> [<a href="show_source.php?dir=lotto6&amp;file=lucky1.php">查看原始碼</a>] 回顧：產生一個隨機幸運球</li>
    <li><a href="lotto6/lucky2.php">lucky2.php</a> [<a href="show_source.php?dir=lotto6&amp;file=lucky2.php">查看原始碼</a>] 回顧：產生多個隨機幸運球</li>
    <li><a href="lotto6/lucky3.php">lucky3.php</a> 有趣的變化</li>
    <li>-----程式的變化------------------</li>
    <li><a href="lotto6/a1.php">a1.php</a> [<a href="show_source.php?dir=lotto6&amp;file=a1.php">查看原始碼</a>] (產生六個球，有BUG，會發生重覆)</li>
    <li><a href="lotto6/a2.php">a2.php</a> [<a href="show_source.php?dir=lotto6&amp;file=a2.php">查看原始碼</a>] (六個球用陣列存放，有BUG，會發生重覆)</li>
    <li><a href="lotto6/a3.php">a3.php</a> [<a href="show_source.php?dir=lotto6&amp;file=a3.php">查看原始碼</a>] (不重覆) (含原來順序及排序後) (***主要的程式***)</li>
    <li><a href="lotto6/a4.php">a4.php</a> [<a href="show_source.php?dir=lotto6&amp;file=a4.php">查看原始碼</a>] (檢查陣列內是否有此數的程式寫法，功能同 in_array() 函式)</li>
    <li><a href="lotto6/a5.php">a5.php</a> [<a href="show_source.php?dir=lotto6&amp;file=a5.php">查看原始碼</a>] (上述的函式做成自訂函式，功能同 in_array() 函式)</li>  
    <li>-----尚有其他演算法--------------</li>
    <li><a href="lotto6/a6.php">a6.php</a> [<a href="show_source.php?dir=lotto6&amp;file=a6.php">查看原始碼</a>] 演算法：全部的球放進盒子裡，隨機挑出六個</li>
    <li><a href="lotto6/a7.php">a7.php</a> [<a href="show_source.php?dir=lotto6&amp;file=a7.php">查看原始碼</a>] 演算法：全部的球放進盒子裡，打散，挑出前面六個</li>
</ul>

<p>陣列用法補充 (array_sort) </p>
<ul>
    <li>程式請見目錄內各檔案 <a href="array_sort/">array_sort</a></li>
</ul>

<div class="hot" style="background-color:rgb(139, 240, 141); padding:5px;">
    <p><a href="functions.pdf">PHP的函式下載</a></p>
</div>

<p>&nbsp;</p>





<h2>Class 03 (2025/03/03)</h2>

<p>BMI身體質量指數 (bmi) **有錯誤處理的進階方法**</p>
<ul>
    <li>程式執行 <a href="bmi/input.php">input.php</a> </li>
    <li>查看原始碼：表單輸入 [<a href="show_source.php?dir=bmi&amp;file=input.php">input.php</a>]</li>
    <li>查看原始碼：計算結果 [<a href="show_source.php?dir=bmi&amp;file=calc.php">calc.php</a>]</li>
</ul>
<p>BMI身體質量指數 (bmi_demo)</p>
<ul>
    <li>程式執行 <a href="bmi_demo/input.php">input.php</a> </li>
</ul>
<p>客戶意見留言 (comment)</p>
<ul>
    <li>程式執行 <a href="comment/input.php">input.php</a></li>
    <li>查看原始碼：表單輸入 [<a href="show_source.php?dir=comment&amp;file=input.php">input.php</a>]</li>
    <li>查看原始碼：結果存檔 [<a href="show_source.php?dir=comment&amp;file=save.php">save.php</a>]</li>
</ul>

<p>&nbsp;</p>





<h2>Class 02 (2025/02/26)</h2>

<p>九九乘法CAI練習 (game99)</p>
    <ul>
        <li>程式執行 <a href="game99/question.php">question.php</a> </li>
        <li>查看原始碼：
            [<a href="show_source.php?dir=game99&amp;file=question.php">question.php</a>]
            [<a href="show_source.php?dir=game99&amp;file=answer.php">answer.php</a>]
        </li>
    </ul>

<p>上週作業解答 (rand_pic)</p>
<ul>
    <li>程式執行 <a href="rand_pic/index.php">rand_pic/index.php</a></li>
</ul>

<p>&nbsp;</p>





<h2>Class 01 (2025/02/24)</h2>

<p>自我介紹 (intro)</p>
<ul>
    <li>第一支程式： [<a href="first/intro1.php">執行</a>] [<a href="show_source.php?dir=first&amp;file=intro1.php">查看原始碼</a>]</li>
    <li>強化美工： [<a href="first/intro2.php">執行</a>] [<a href="show_source.php?dir=first&amp;file=intro2.php">查看原始碼</a>]</li>
    <li>ChatGPT: 模擬 10 位人物(包含分頁)： [<a href="first/intro3.php">執行</a>] [<a href="show_source.php?dir=first&amp;file=intro3.php">查看原始碼</a>]</li>
</ul>

<p>幸運數字 (lucky)</p>
<ul>
    <li>Lucky Number <a href="lucky/index.php">index.php</a> [<a href="show_source.php?dir=lucky&amp;file=index.php">查看原始碼</a>]</li>
</ul>

<p>&nbsp;</p>






</body>
</html>