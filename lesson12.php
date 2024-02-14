<?php

$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$answer = 0;

foreach ($numbers as $value) {
    $answer = $answer + $value;
}

echo 'The value of answer is ' . $answer;

?>
