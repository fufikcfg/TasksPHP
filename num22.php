<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Year:</p>
        <input maxlength="3000" minlength="1000" type="number" name="year">
        <button>Ok</button>
    </form>
<?php
$year = isset($_POST['year']);
if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)){
    echo "високосный";
}
else {
    echo "нет";
}
?>
</body>
</html>