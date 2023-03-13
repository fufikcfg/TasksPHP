<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p><b>text:</b></p>
        <p><textarea rows="1" cols="20" name="text"></textarea></p>
        <p><button>Submit</button></p>
    </form>
<?php
error_reporting(0);
$text = $_POST['text'];
$arr_let = ['А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 
'Е' => 'E', 'Ё' => '~', 'Ж' => ':', 'З' => 'Z', 'И' => 'I', 
'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 
'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 
'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'X', 
'Ш' => 'I', 'Щ' => 'O', 'Ь' => '', 'Ы' => 'Y', 'Ъ' => '', 
'Э' => '"', 'Ю' => '>', 'Я' => 'Z', 
'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',  
'е' => 'e', 'ё' => '`', 'ж' => ';', 'з' => 'z', 'и' => 'i', 
'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 
'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 
'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'x', 
'ш' => 'i', 'щ' => 'o', 'ь' => '', 'ы' => 'y', 'ъ' => '', 
'э' => '"', 'ю' => '.', 'я' => 'z' , ' '=>' ']; 
echo str_replace(array_keys($arr_let), array_values($arr_let), $text);
?>