<?php
$n = 13;
if ( $n % 2 == 0 ) {
    echo "$n is an even number";
} else {
    echo "$n is a odd number\n";
}

// *******

if ( $n > 10 ) {
    echo "$n is greater than 10";
} else {
    echo "$n is smaller than 10";
}
// *******
echo "\n";

$age = 13;
$name = "Rajesh";

if ( $age >= 13 && $age <= 19 ) {
    echo "{$name} is a teenager";
} else {
    echo "{$name} is not a teenager";
}
//******
echo "\n";

$food = "apple";

if ( "tuna" == $food || "Salmon" == $food ) {
    echo "{$food} has vitamin D";
} else {
    echo "{$food} does not conatin Vitamin D";
}
