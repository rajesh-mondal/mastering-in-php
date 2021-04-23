<?php
function sum( int...$numbers ): int {
    $result = 0;
    for ( $i = 0; $i < count( $numbers ); $i++ ) {
        $result += $numbers[$i];
    }
    return $result;
}
echo sum( 5, 6, 7, 8, 9, 2, 3 );

echo "\n=====\n";


//make larger function to small
function doTaskA() {
    echo "Step A Done\n";
}
function doTaskB() {
    echo "Step B Done\n";
}
function doTaskC() {
    echo "Step C Done\n";
}
function doTaskD() {
    echo "Step D Done\n";
}
function doTaskE() {
    echo "Step E Done\n";
}

function doTheLargerTask() {
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doTheLargerTask();

echo "\n=====\n";

function familyName( $fname, $year ) {
    echo "His Name is {$fname} and Birth Year {$year}";
}

familyName( "Goerge", "1995\n" );
familyName( "Boogle", "1997\n" );
familyName( "David", "1992" );
