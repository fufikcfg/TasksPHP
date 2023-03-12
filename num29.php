<html lang="en">

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

$handlerText;

$arr_let = ['A' => 0, 'B' => 0, 'C' => 0, 'D' => 0, 'E' => 0, 'F' => 0, 'G' => 0, 'H' => 0, 'I' => 0, 'J' => 0, 'K' => 0, 'L' => 0, 'M' => 0, 'N' => 0, 'O' => 0, 'P' => 0, 'Q' => 0, 'R' => 0, 'S' => 0, 'T' => 0, 'U' => 0, 'V' => 0, 'W' => 0, 'X' => 0, 'Y' => 0, 'Z' => 0];

$resArrLet = [];
$value = "";

$handlerText = mb_strtoupper(str_replace(" ", '', $text)); 
for ($i=0; $i < strlen($handlerText); $i++) { 
    $value = $handlerText[$i];
    $arr_let[$value]++;
}

foreach ($arr_let as $key => $value) {
    echo $key . " " . round(($value / 27) * 100, 2) . "%<br>";
}
?>