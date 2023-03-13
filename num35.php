<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .inp {
            border-radius: 50px;
        }
        .btn {
            width: 227px;
            border-radius: 50px;
        }
        .btn:hover {
            border-color: blueviolet;
        }
        .inp:hover {
            border-color: blueviolet;
        }
    </style>
    <form action="" method="post">
        <a>number 1:</a>
        <input class="inp" name="number1" type="number">
        <a><br><br>number 2:</a>
        <input class="inp" name="number2" type="number">
        <a><br><br></a>
        <button class="btn">Submit</button>
    </form>
</body>
</html>
<?php

$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
$bigNum;
$bigNumArr = [];

echo "делители: <br>";

if($num1 > $num2) {
    $bigNum = $num1;
}
else {
    $bigNum = $num2;
}

for ($i=1, $j = 0; $i <= $bigNum; $i++, $j++) { 
    echo ($num1 % $i == 0 && $num2 % $i == 0) ? ($bigNumArr = $i . "<br>") : (null); // почему выводится инструкция не знаю
}

echo "<br>наибольший общий делитель этих двух чисел: " . $bigNumArr;
?>