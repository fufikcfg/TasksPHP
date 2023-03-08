<?php
function printArray($arr, $i = 0) {
    if($i < count($arr)) {
        echo $arr[$i] . " ";
        printArray($arr, $i+1);
    }
}
$arr = [1,3,4,5];
printArray($arr);
?>