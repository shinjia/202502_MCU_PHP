<?php

// 原始學生資料
$a_student = array( 
   array("reg"=>"B82", "name"=>"Alan" , "s1"=>50, "s2"=>23, "s3"=>83 ),
   array("reg"=>"B42", "name"=>"Bruce", "s1"=>32, "s2"=>67, "s3"=>92 ),
   array("reg"=>"C23", "name"=>"Candy", "s1"=>64, "s2"=>25, "s3"=>63 ),
   array("reg"=>"C52", "name"=>"David", "s1"=>67, "s2"=>73, "s3"=>67 ),
   array("reg"=>"A52", "name"=>"Eric" , "s1"=>83, "s2"=>47, "s3"=>58 ),
   array("reg"=>"A12", "name"=>"Ford" , "s1"=>34, "s2"=>23, "s3"=>56 ) 
);

// 1. 計算總分與平均分
foreach ($a_student as &$student) {
    $student['total'] = $student['s1'] + $student['s2'] + $student['s3'];
    $student['average'] = round($student['total'] / 3, 2);
}
unset($student); // 解除引用

// 2. 根據總分降序排序
usort($a_student, function($a, $b) {
    return $b['total'] - $a['total'];
});

// 3. 過濾總分大於 150 的學生
$filtered_students = array_filter($a_student, function($student) {
    return $student['total'] > 150;
});

// 4. 轉換為 JSON 格式
$json_data = json_encode($a_student, JSON_PRETTY_PRINT);

// 5. 輸出為 HTML 表格
$str = '';
foreach ($a_student as $student) {
    $s_reg = $student['reg'];
    $s_name = $student['name'];
    $s_s1 = $student['s1'];
    $s_s2 = $student['s2'];
    $s_s3 = $student['s3'];
    $s_total = $student['total'];
    $s_average = $student['average'];

    $str .= <<< HEREDOC
    <tr>
        <td>{$s_reg}</td>
        <td>{$s_name}</td>
        <td>{$s_s1}</td>
        <td>{$s_s2}</td>
        <td>{$s_s3}</td>
        <td>{$s_total}</td>
        <td>{$s_average}</td>
    </tr>
HEREDOC;

$html = <<< HEREDOC
<h2>學生成績表</h2>
<table border='1' cellpadding='5'>
<tr><th>學號</th><th>姓名</th><th>科目1</th><th>科目2</th><th>科目3</th><th>總分</th><th>平均分</th></tr>
{$str}
</table>
HEREDOC;

// 6. 匯出 CSV
$csv_file = "students.csv";
$fp = fopen($csv_file, "w");

// 寫入標題
fputcsv($fp, ["學號", "姓名", "科目1", "科目2", "科目3", "總分", "平均分"]);

// 寫入學生資料
foreach ($a_student as $student) {
    fputcsv($fp, [$student['reg'], $student['name'], $student['s1'], $student['s2'], $student['s3'], $student['total'], $student['average']]);
}

fclose($fp);

echo "<p>CSV 檔案已建立：<a href='$csv_file' download>下載 CSV</a></p>";

// 7. 輸出 JSON 格式
echo "<h2>JSON 格式資料</h2>";
echo "<pre>$json_data</pre>";

?>
