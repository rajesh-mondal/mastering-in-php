<?php
// array reduce
$numbers = array( 1, 2, 3, 4, 5, 6 );

function sum( $oldValue, $newValue ) {
    return $oldValue + $newValue;
}

$sum = array_reduce( $numbers, 'sum' );
echo $sum . "\n";

// another example
// sumations of even number
function even( $oldValue, $newValue ) {
    if ( $newValue % 2 == 0 ) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$even = array_reduce( $numbers, 'even' );
echo $even;

/*How it works
sum(0,1); 1
sum(1,2); 3
sum(3,3); 6
sum(6,4); 10.....
 */