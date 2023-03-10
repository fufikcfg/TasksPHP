<?php
$str = "aabbcc";
$result = "";
for ($i=0; $i < strlen($str); $i += 2) { 
    $result .= substr($str, $i, 1); // строка, начало, длина
}
echo $result;
?>