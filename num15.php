<?php
$str = "aAbBcC";
for ($i=0; $i <= strlen($str) - 1; $i++) { 
    if (ctype_lower($str[$i])) {
        $str[$i] = mb_strtoupper($str[$i]);
    }
    else {
        $str[$i] = mb_strtolower($str[$i]);
    }
}
echo $str;
?>