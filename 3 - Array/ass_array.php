<?php
//associative array
/*
$students = [
'12' => 'Hasan',
'13' => 'Karim',
'14' => 'Jalal'
];
echo $students['12']. "\n";
 */
//Another

$foods = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam',
    'fruits'     => 'orange, banana, apple',
    'drinks'     => 'water, milk',
];
$foods['drinks'] = $foods['drinks'] . ", orange juice";

echo count( $foods ) . "\n";
echo $foods['vegetables'];
echo PHP_EOL;
//for each loop
foreach ( $foods as $key => $value ) {
    echo $key . "=" . $value . "\n";
}

//Another way to using loop in array
//$keys = array_keys( $foods );
//print_r( $keys );