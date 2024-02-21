<?php

extract($_POST);
$text = strtoupper($text);
$newtext = wordwrap($text, 50, '<br>');
echo $newtext;
?>
