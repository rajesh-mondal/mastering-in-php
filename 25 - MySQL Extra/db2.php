<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'mysqlextra' );
$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
$stmt = $mysqli->prepare( "INSERT INTO newstudents(name, sex, class, section, roll)
                        values(?,?,?,?,?)" );
$name = '';
$sex = '';
$class = '';
$section = '';
$roll = '';
$stmt->bind_param( 'ssisi', $name, $sex, $class, $section, $roll );
$csv_data = array_map( 'str_getcsv', file( 'babynames-clean.csv' ) );
shuffle( $csv_data );
$_students = [];
$sections = ['A', 'B', 'C', 'D'];
//print_r($csv_data[1]);
for ( $i = 0; $i < 1100; $i++ ) {
    $name = $csv_data[$i][0];
    $sex = $csv_data[$i][1] == 'boy' ? "M" : "F";
    $class = rand( 1, 10 );
    $section = $sections[array_rand( $sections )];
    $_students["{$class}{$section}"][] = 1;
    $roll = count( $_students["{$class}{$section}"] );
    printf( "%s:%s:%s:%s:%s\n", $name, $sex, $class, $section, $roll );
    $stmt->execute();
}