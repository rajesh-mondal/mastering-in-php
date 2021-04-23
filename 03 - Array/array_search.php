<?php
//associative array search
$fruits = array( 'a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango' );
$numbers = array( 11, 2, 56, 3, 4, 2, 77, 5 );

if ( in_array( 56, $numbers ) ) { // for element searching
    echo "56 is found";
}
echo PHP_EOL;

$offset = array_search( 56, $numbers ); // for position searching
echo $offset;
echo "\n";

if ( key_exists( 'b', $fruits ) ) {
    echo "key b exist";
}