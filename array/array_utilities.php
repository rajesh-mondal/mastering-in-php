<?php
// associative utility function - walk, map, filter
$numbers = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 );

function square( $n ) { //function for array walk
    printf( "Square od %d is %d \n", $n, $n * $n );
}
function cube( $n ) { // function for array_map
    return $n * $n * $n;
}
function even( $n ) { //funtion for array filter
    return $n % 2 == 0;
}
function odd( $n ) { //funtion for array filter
    return $n % 2 == 1;
}
array_walk( $numbers, 'square' ); //array walk
$newArray = array_map( 'cube', $numbers ); // array map
print_r( $newArray );
$evenNumbers = array_filter( $numbers, 'even' ); // array filter - here even is callback function
$oddNumbers = array_filter( $numbers, 'odd' ); // array filter for odd function
print_r( $evenNumbers );
print_r( $oddNumbers );

$persons = array( 'sujon', 'kabir', 'sabab', 'selim', 'roni', 'jamal', 'kamal', 'sayma' );

function filterByS( $name ) {
    return $name[0] == 's';
}

$newPersons = array_filter( $persons, 'filterByS' );
print_r( $newPersons );