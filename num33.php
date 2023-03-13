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
        <a>number:</a>
        <input class="inp" name="number" type="number">
        <a><br><br></a>
        <button class="btn">Submit</button>
    </form>
</body>
</html>
<?php

$num = $_POST['number'];
echo "делители: <br>";
for ($i=1; $i <= $num; $i++) { 
    echo ($num % $i == 0) ? "$i<br>" : "";
}
?>