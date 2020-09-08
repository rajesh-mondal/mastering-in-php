<?php
$n = 12;
$r = $n % 2;

switch ( $r ) {
case 0:
    echo "{$n} is an even number";
    break;
default:
    echo "{$n} is an odd number";
}

echo "\n";

$color = 'red';
switch ( $color ) {
/*
case 'blue':
echo "{ $color } is our favourite color";
break;
case 'red':
echo "{ $color } is our favourite color";
break;
 */
case 'blue':
case 'red':
    echo ucwords( $color ) . " is our favourite color";
    break;
case 'green':
    echo "{$color} is our favourite color";
    break;
default:
    echo "This color is okay";
}