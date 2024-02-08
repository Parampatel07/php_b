<?php
// Write a programe to create a calc using switch case given option for
// addition
// subtraction
// multiplication
// division
// modulus
// max
// min
// equality
$number1 = 10;
$number2 = 20;
$option = 9;

echo '<br> The value of number 1 is ' . $number1;
echo '<br> The value of number 2 is ' . $number2;

echo '<br>Enter 1 for addition ';
echo '<br>Enter 2 for subtraction ';
echo '<br>Enter 3 for multiplication';
echo '<br>Enter 4 for division ';
echo '<br>Enter 5 for modulus';
echo '<br>Enter 6 for max';
echo '<br>Enter 7 for min';
echo '<br>Enter 8 for equality ';
echo '<br>Select any one option ';
echo '<br>option is ' . $option;

switch ($option) {
    case 1:
        $answer = $number1 + $number2;
        echo '<br>Answer is ' . $answer;
        break;

    case 2:
        $answer = $number1 - $number2;
        echo '<br>Answer is ' . $answer;
        break;

    case 3:
        $answer = $number1 * $number2;
        echo '<br>Answer is ' . $answer;
        break;

    case 4:
        $answer = $number1 / $number2;
        echo '<br>Answer is ' . $answer;
        break;

    case 5:
        $answer = $number1 % $number2;
        echo '<br>Answer is ' . $answer;
        break;

    case 6:
        if ($number1 > $number2) {
            echo '<br>Number 1 is greater ';
        } elseif ($number2 > $number1) {
            echo '<br>Number 2 is greater ';
        } else {
            echo '<br>Both are same ';
        }
        break;

    case 7:
        if ($number1 < $number2) {
            echo '<br>Number 1 is smaller ';
        } elseif ($number2 < $number1) {
            echo '<br>Number 2 is smaller ';
        } else {
            echo '<br>Both are same ';
        }
        break;

    case 8:
        if ($number1 == $number2) {
            echo '<br>Both are same ';
        } else {
            echo '<br>Both are not same ';
        }
        break;

    default:
        echo '<br>Invalid Option';
        break;
}
?>
