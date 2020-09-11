<?php
function printN( $i ) {
    if ( $i >= 10 ) {
        return;
    }
    echo $i . "\n";
    $i++;
    printN( $i );
}
printN( 0 );

echo "\n=====\n";

//Recursive Function //Recursion
function printNumber( $counter, $end, $stepping = 1 ) {
    if ( $counter > $end ) {
        return;
    }
    echo $counter . "\n";
    $counter += $stepping;
    printNumber( $counter, $end, $stepping );
}

printNumber( 21, 37, 3 );