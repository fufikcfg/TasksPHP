<?php
$str = '12345678';
$newStr = array_reverse(str_split(strrev($str), 2)); //второй аргумент str_split lenght
echo implode('', $newStr); //Объединяет элементы массива в строку
?>