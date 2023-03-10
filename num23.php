<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <p>дата в формате '01.12.1990':</p>
        <input type="text" name="date">
        <button>Ok</button>
    </form>
<?php
setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');  
$date_str = $_POST['date'];
$date_obj = DateTime::createFromFormat('d.m.Y', $date_str);
$day_of_week = $date_obj->format('l'); 
echo $day_of_week;
?>
</body>
</html>