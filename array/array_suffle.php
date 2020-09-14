<?php
// array suffling and random number
$numbers = range( 40, 72 );
//print_r( $numbers );
//echo count( $numbers ); //total numbers of elements
$random = mt_rand( 0, 32 );
//echo $random;

$luck = $numbers[$random];
if ( $luck % 2 == 0 ) {
    echo "Head";
} else {
    echo "Tail";
}

echo "--Suffle--\n";
shuffle( $numbers );
print_r( $numbers );

$randomNumber = $numbers[3];
echo $randomNumber;