<?php

//*создать отдельный .php
error_reporting(1);

$num = $_GET['number'];
if(isset($_GET["number"])){
    $num = 1;
}
function factorial($n) {
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo factorial($num);
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <a>number:</a>
        <input name="number" type="number">
        <button>Submit</button>
    </form>
</body>
</html>
