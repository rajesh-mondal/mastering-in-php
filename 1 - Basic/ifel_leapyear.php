<?php
// Program for Leap year
//1. divisible by 4 ?
//2. divisible by 100?
//3. divisible by $00?

$year = 2017;

if ( $year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0 ) {
    echo "{$year} is a leap year";
} elseif ( $year % 4 == 0 && $year % 100 == 0 ) {
    echo "{$year} is not a leap year";
} elseif ( $year % 4 == 0 ) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

// Shortcode practise
if ( true && true ) {
    echo "\nwow!";
}
echo "\n";
if ( True || True ) {
    echo "Oh! Man.";
}

echo "\n";

//Shortcode of Leao Year
if ( $year % 4 == 0 && ( $year % 100 != 0 || $year % 400 == 0 ) ) {
    echo "{$year} is a Leap Year";
} else {
    echo "{$year} is not a Leap Year";
}
