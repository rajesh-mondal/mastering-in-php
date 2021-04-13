<?php
//echo time();
//echo date( 'd/F/Y' );
//echo microtime( true ); // for microseconds
// unix epoch //unix timestamp
//$mt = microtime( true );
//printf( "%10.8f", $mt );

$startTime = microtime( true );
factorial( 100 );
sleep( 2 ); // freez for two seconds
$endTime = microtime( true );
$executionTime = $endTime - $startTime;
printf( "%10.8f", $executionTime );

function factorial( $n ) {
    $result = 1;
    for ( $i = 1; $i <= $n; $i++ ) {
        $result += $i;
    }
    return $result;
}