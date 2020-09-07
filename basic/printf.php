<?php
$fname = "Issac";
$lname = "Newton";
$mname = "Sir";

//printf("His name is %s %s", $fname,$lname);
printf( 'His name is %3$s %2$s %1$s', $fname, $mname, $lname );
echo "\n";
printf( 'The Binary equivalent of %1$d is %1$b', 12 );
echo "\n";

$n = 45.126;
printf( "%.2f", $n );
echo "\n";

$m = 123; //0123
$p = 27; //0023
printf( "%04d \n", $m );
printf( "%04d", $p );

echo "\n***** \n";

printf( "%05.2f \n", $m );
printf( "%05.2f \n", $p );
