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
        // execute update
        //echo $conn->executeUpdate( 'UPDATE persons SET email=? WHERE id=?', ['jimmy@jimmy.com', 5] );
        // another way
        echo $conn->update( 'persons', ['email' => 'jimmy@doe.com'], ['id' => 5] );

    }
} catch ( Exception $e ) {
    echo "Failed";
}