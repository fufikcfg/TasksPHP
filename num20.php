<?php
function primeNumbers($number){
    for ($i = 2; $i <= $number; $i++) {
        if($number == 2 || $number == 3){
            return true;
        }
        if (($number ** 2) % 24 == 1) {
            return true;
        }
    }
    return false;
};
echo (primeNumbers(2)) ? "простое число" : "cложное число";
?>