<?php
$n = 12;
$students = array(
    "rahim",
    "karim",
    123,
    "monir",
    "khatas",
);

/* //Alternative way to declaring array.
$students = [
"rahim",
"karim",
123,
"monir",
"khatas"
];
 */
echo $students[3];
echo PHP_EOL;
var_dump( $students ); // for checking variable types
echo count( $students ); //for counting number of elements
echo PHP_EOL;

$n = count( $students );
for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";
}

for ( $i = $n - 1; $i >= 0; $i-- ) {
    echo $students[$i] . "\n";
}