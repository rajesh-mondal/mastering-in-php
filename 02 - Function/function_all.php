<?php
//Recursive function using stepping
function printNumber( $counter, $end, $stepping = 1 ) {
    if ( $counter > $end ) {
        return;
    }
    echo $counter . "\n";
    $counter += $stepping;
    printNumber( $counter, $end );
}
printNumber( 21, 37, 3 );

echo "=====\n";

// Printing Fibonacchi series using recursion
function fibonacci( $old, $new, $end ) {

    static $start;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }
    $start++;
    echo $old . " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci( $old, $new, $end );
}
fibonacci( 0, 1, 10 );
//echo PHP_EOL;
echo "\n=====\n";

//Factorial program using recursive function
function factorial( $n ) {
    if ( $n <= 1 ) {
        return 1;
    }
    return $n * factorial( $n - 1 );
}
echo factorial( 5 );