<?php

$text = 'abcdef';

echo substr($text, 3, 5);

$dec = '111';

echo '<br>';
echo bindec($dec);

echo '<br>';
echo decbin(4294967295);

echo '<br>';
echo dechex(4294967295);

echo '<br>';
echo pow(2, 10);

echo '<br>';
echo rand();

echo '<br>';
echo sqrt(25);

$number = [10, 20, 30, 40, 562, 98, 23, 1546, 12];

echo '<br>';
echo min($number);
echo '<br>';
echo max($number);
?>
