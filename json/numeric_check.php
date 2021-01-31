<?php
echo "String representing numbers automatically turned into numbers" . PHP_EOL;
$numbers = array( '+123123', '-123123', '1.2e3', '0.00001' );
var_dump( $numbers, json_encode( $numbers, JSON_NUMERIC_CHECK ) );

echo "String containing improperly formatted numbers" . PHP_EOL;
$string = array( '+a33123456789', 'a123' );
var_dump( $string, JSON_NUMERIC_CHECK );