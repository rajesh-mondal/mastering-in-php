<?php
$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );

$random = array( "a" => 12, "b" => 45, "c" => 34, "d" => 77, "e" => 77, "f" => 31, 12 => 18, "g" => 87 );

//$someFruits = array_slice( $fruits, 2 );//for array extracting
//$someFruits = array_slice( $fruits, 2, 2 );
//$someFruits = array_slice( $fruits,-5, -1 );

$someFruits = array_slice( $fruits, 3, 3, true );
print_r( $someFruits );
echo "\n";
//$randomData = array_slice( $random, 3 );
$randomData = array_slice( $random, -4, 3, true );
print_r( $randomData );

//Array splice part start
echo "--Array Splice--";
//$someFruits = array_splice( $fruits,2,2 );
//$someFruits = array_splice( $fruits,2,-1 );
$newFruits = array( "Jackfruit", "tamarind", "pineapple" );
$someFruits = array_splice( $fruits, -5, 2, $newFruits );
print_r( $someFruits );
print_r( $fruits );
