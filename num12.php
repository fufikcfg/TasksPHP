<?php
$result = "";
for ($i=0; $i <= 6; $i++) { 
    $result .= rand(1, 9); //Конкатенация строк
}
echo $result;
?>