<?php
//associative array sorting
$fruits = array( 'a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango' );
$numbers = array( 11, 2, 56, 3, 4, 2, 77, 5 );
//arsort( $numbers ); //reverse of sdort is arsort
//sort( $fruits ); //reverse of sort is rsort
ksort( $fruits ); // sorting based on key
ksort( $fruits ); // reverse sorting based on key
print_r( $fruits );
sort( $numbers, SORT_STRING ); // sort by string
print_r( $numbers );
/*
for( $i=0; $i<count($numbers); $i++){
echo $numbers[$i]."\n";
}
 */
foreach ( $numbers as $number ) {
    echo $number . "\n";
}

$random = array( "apple", "Apple", "banana", "Banana", "Pineapple" );
sort( $random, SORT_STRING | SORT_FLAG_CASE );
print_r( $random );