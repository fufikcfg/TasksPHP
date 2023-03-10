<?php

function delNoDouble($arr, $newArr = [], $double = 0)
{
    for ($i = 0; $i < count($arr); $i++) {
        $double = $arr[$i];
        unset($arr[$i]);
        if (in_array($double, $arr)) {
            $newArr[] = $double;
        }
        $arr[$i] = $double;
    }
    return $newArr;
};

$arr = [1, 2, 3, 4, 3, 3, 3, 3, 4, 4, 4, 54]; //1 2 54
echo count($arr) . "\tизначальный размер массива<br>";
var_dump(delNoDouble($arr));
?>