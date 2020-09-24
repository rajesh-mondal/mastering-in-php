<?php
$string = "Hello World";
echo $string[0];
echo PHP_EOL;
echo $string[-6];
echo PHP_EOL;
echo substr( $string, 1, 4 ); // 1 starting position, no of charecter 4
echo PHP_EOL;
echo substr( $string, -3 );
echo PHP_EOL;
echo substr( $string, -3, 2 );