<?php
$filename = "/Users/Rajesh/Desktop/phpCoding/data/f5.txt";
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
//$encodedData = json_encode( $students );
//file_put_contents( $filename, $encodedData, LOCK_EX );

$data = file_get_contents( $filename );
$allStudents = json_decode( $data, true );
print_r( $allStudents );
echo $allStudents[0]['fname'];

//echo $allStudents[0]->fname;