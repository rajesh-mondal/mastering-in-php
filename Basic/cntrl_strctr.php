<?php
$n = 11;
if ( $n % 2 == 0 ):
    echo "Even Number";
    echo PHP_EOL; //default end line constant of php
    echo "Some text";
else:
    echo "Odd Number";
    echo PHP_EOL;
    echo "Some text";
endif;
echo PHP_EOL;

switch ( $n % 2 ):
case 0:
    echo "Even Number";
    break;
default:
    echo "Odd Number";
    endswitch;