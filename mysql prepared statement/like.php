<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'mysqlextra' );

$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
$stmt = $mysqli->prepare( "SELECT * FROM students WHERE name LIKE ?" );

$name = '%br%';
$stmt->bind_param( 's', $name );
$stmt->execute();

print_r( $stmt->get_result()->fetch_all( MYSQLI_ASSOC ) );

$stmt->close();
