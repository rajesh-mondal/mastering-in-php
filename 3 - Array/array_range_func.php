<?php
//array range function
/*
$numbers = array();
for( $i=12; $i<20; $i++ ) {
array_push( $numbers, $i );
}
print_r($numbers); */
// Range program start from here
//$numbers = range( 12, 20 ); // first on is for start and second end
$numbers = range( 12, 20, 2 ); // stepping 2 for printing even number
print_r( $numbers );

foreach ( range( 0, 50, 7 ) as $evenNumbers ) { //to print all numbers which are divided by 7
    if ( $evenNumbers > 0 ) {
        echo $evenNumbers . "\n";
    }
}
echo "Numbers which are divided by 11:\n";
foreach ( range( 0, 60, 11 ) as $numbers ) {
    if ( $numbers > 0 ) {
        echo $numbers . "\n";
    }
}