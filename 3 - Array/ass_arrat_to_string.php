<?php
//associative array to string coversion - serialize, json
$student = array(
    'fname'   => 'Rajesh',
    'lname'   => 'Mondal',
    'age'     => '15',
    'class'   => '8',
    'section' => 'B',
);

print_r( $student );

echo $student['fname'] . " " . $student['lname'] . "\n";
printf( "%s %s \n", $student['fname'], $student['lname'] );

echo serialize( $student );

$serialized = serialize( $student );
$newStudent = unserialize( $serialized );
print_r( $newStudent );

echo "--Jason--\n";
//Using Jason data
$jsondata = json_encode( $student );
echo $jsondata;
echo "\n";
//decoding json data
$student2 = json_decode( $jsondata, true );
print_r( $student2 );