<?php
//Determine the argument even or odd?
function isEven( $n ) //parameter
{
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;
}

$x = 13;

if ( isEven( $x ) ) { //argument
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}

//factorial check
echo "\n==Factorial Check==\n";
function factorial( int $n ) {
    $result = 1;
    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }
    return $result;
}

$x = 5;
echo "Factorial of {$x} is " . factorial( $x );