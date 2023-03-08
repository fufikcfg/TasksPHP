<?php
function isLucky($number) {
  
  $sum1 = 0;
  $sum2 = 0;


  $digits = str_split($number);
  $half = count($digits) / 2;


  for ($i = 0; $i < $half; $i++) {
      $sum1 += $digits[$i];
      $sum2 += $digits[$i + $half];
  }

  if ($sum1 == $sum2) {
      return true;
  } else {
      return false;
  }
}

$luckyTickets = 0;
for ($i = 100000; $i <= 999999; $i++) {
  if (isLucky($i)) {
    $luckyTickets++;
  }
}
echo $luckyTickets;
?>
