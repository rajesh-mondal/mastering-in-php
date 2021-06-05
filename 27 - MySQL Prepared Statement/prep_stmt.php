<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'mysqlextra' );

$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
$stmt = $mysqli->prepare( "SELECT * FROM students WHERE class=? AND section=?" );

$class = 1;
$section = 'A';

$stmt->bind_param( 'is', $class, $section );
$stmt->execute();

echo $stmt->get_result()->num_rows . "\n";

$class = 2;
$section = 'A';

$stmt->execute();
echo $stmt->get_result()->num_rows;

$stmt->close();