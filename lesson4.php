<?php
$number1 = 100;
$number2 = 100;
$number3 = 100;

if ($number1 < $number2 && $number1 < $number3) {
    echo 'Number 1 is smallest ';
} elseif ($number2 < $number1 && $number2 < $number3) {
    echo 'Number 2 is smallest ';
} elseif ($number3 < $number1 && $number3 < $number2) {
    echo 'Number 3 is smallest ';
} else {
    echo 'Number 1 and number 2 and number 3 all are same ';
}

?>
