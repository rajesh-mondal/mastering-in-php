<?php
// ternary operator
$n = 10;
if ( 12 == $n ) {
    echo "Twelve";
} elseif ( 10 == $n ) {
    echo "Ten";
} else {
    echo "A Number";
}
echo "\n";
//******

//$numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = ( 12 == $n ) ? "Twelve" : ( 10 == $n ) ? "Ten" : "A Number";
echo $numberInWord;

echo "\n";

//$result = ($n % 2 == 0) ? "Even Number" : "Odd Number"; //Ternary Operator
$result = ( $n % 2 == 0 ) ? "{$n} is a Even Number" : "{$n} is a Odd Number";
echo $result;