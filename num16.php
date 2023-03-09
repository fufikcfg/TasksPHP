<?php
$arr = [1, 2, 3, 4, 5, 6];
$newArr = array();
for ($i = 0; $i <= count($arr) - 1; $i += 2) {
    $newArr[$arr[$i]] = $arr[$i + 1];
}
var_dump($newArr);
?>
