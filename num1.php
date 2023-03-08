<?php
$num = 1000;
$iteration_count = 0;

while ($num > 50) {
    $num = $num / 2;
    $iteration_count++;
}
echo "number of iterations while: $iteration_count <br>";

$num = 1000;
$iteration_count = 0;
for (; $num > 50;) { 
    $num = $num / 2;
    $iteration_count++;
}
echo "number of iterations for: $iteration_count <br>";
?>