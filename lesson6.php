<?php
// Write a programe to findout how many days the given month has without using and or and elseif

$month = 4;
if ($month <= 12) {
    if ($month > 0) {
        if ($month < 7) {
            if ($month == 2) {
                echo 'This month has 28 or 29 days ';
            } else {
                if ($month % 2 == 0) {
                    echo 'This month has 30 days ';
                } else {
                    echo 'This month has 31 days ';
                }
            }
        } else {
            if ($month % 2 == 0) {
                echo 'This month has 31 days';
            } else {
                echo 'This month has 30 days ';
            }
        }
    } else {
        echo 'Invalid month';
    }
} else {
    echo 'Invalid month ';
}

?>
