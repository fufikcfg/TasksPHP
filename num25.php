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
date_default_timezone_set('UTC');
$user_dob = $_POST['date'];
$user_ts = strtotime($user_dob);
$user_day = date('d', $user_ts);
$user_month = date('m', $user_ts);
$user_year = date('Y', $user_ts);

$next_birthday_ts = strtotime($user_day . '-' . $user_month . '-' . date('Y') . ' 00:00:00');

if ($next_birthday_ts < time()) {
    $next_birthday_ts = strtotime($user_day . '-' . $user_month . '-' . (date('Y') + 1) . ' 00:00:00');
}
$diff_days = (int) ceil(($next_birthday_ts - time()) / (60 * 60 * 24));


echo 'Дней до дня рождения: ' . $diff_days;
?>