<?php
$filename = "/Users/Rajesh/Desktop/phpCoding/data/f4.txt";
$students = array(
    array(
        'fname' => 'Rajesh',
        'lname' => 'Mondal',
        'age'   => 12,
        'class' => 7,
        'roll'  => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age'   => 11,
        'class' => 7,
        'roll'  => 13,
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age'   => 12,
        'class' => 7,
        'roll'  => 14,
    ),
);

$student = array(
    'fname' => 'Kamal',
    'lname' => 'Ahmed',
    'age'   => 13,
    'class' => 7,
    'roll'  => 17,
);

//$data = serialize( $students );
//file_put_contents( $filename, $data, LOCK_EX );

$dataFromFile = file_get_contents( $filename );
$allStudents = unserialize( $dataFromFile );
print_r( $allStudents );

//for adding data
//array_push( $allStudents, $students );
//$data = serialize( $allStudents );
//file_put_contents( $filename, $data, LOCK_EX);

// for deleting onne data
/*
unset( $allStudents[1] );
$data = serialize( $allStudents );
file_put_contents( $filename, $data, LOCK_EX );
 */