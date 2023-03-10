<?php
$today = time();
$endOfYear = strtotime('December 31'); 
$daysLeft = round(($endOfYear - $today) / (60 * 60 * 24)); 
echo 'до нового года осталось ' . $daysLeft . "~ дней (+- 2 дня)"; 
?>