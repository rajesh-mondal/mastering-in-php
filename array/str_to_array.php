<?php
// string to array, array to string & multiple delimeter
//$vegetables = 'brinjal, brocolli, carrot, capsicam';
$vegetables = preg_split( '/(, |,)/', 'brinjal, brocolli, carrot, capsicam,potato,potato-sweet' );
print_r( $vegetables ); //for printing array
$vegetablesString = join( ', ', $vegetables );
//var_dump($vegetables);
//echo $vegetables[0];
echo $vegetablesString . "\n";
echo count( $vegetables );