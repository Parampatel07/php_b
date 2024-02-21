<?php 

$date = date("d-m-Y");
echo $date;

echo "<br>";

$time = time();
echo $time ;

echo "<br>";
$strToTime = strtotime("now");
echo $strToTime ;

echo "<br>";
echo date("d-m-Y",mktime(4,28,30,2,21,2024));

?>