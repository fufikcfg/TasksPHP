<?php
$users = ['a', 'g', 'h', 'i', 'j', 'k','w', 'x', 'y', 'z', 'l', 'm','b', 'c', 'd', 'e', 'f', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', ];
$num = count($users);
for($i=0; $i < $num; $i++)
{
    print($i + 1 . " $users[$i]<br>"); //прием, который называется интерполяцией
}
?>