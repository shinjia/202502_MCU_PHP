<?php
$str = 'food ,music, sport   ,\,,,dance';
$ary = explode(',', $str);

$new = implode('###', $ary);
echo '<pre>';
print_r($ary);
echo '</pre>';

echo $new;
?>