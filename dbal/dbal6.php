<?php
require "vendor/autoload.php";

$connectionParams = array(
    'dbname'   => 'dbal',
    'user'     => 'root',
    'password' => '',
    'host'     => 'localhost',
    'driver'   => 'mysqli',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection( $connectionParams );
try {
    if ( $conn->connect() ) {
        $conn->insert( 'persons', ['name' => 'Jimmy Doe', 'email' => 'jimmy@doe.com'] );
        echo $conn->lastInsertId();
    }
} catch ( Exception $e ) {
    echo "Failed";
}