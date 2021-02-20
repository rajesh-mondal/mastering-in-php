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
$qb = $conn->createQueryBuilder();
try {
    if ( $conn->connect() ) {
        $qb->insert( 'persons' )
            ->values( ['name' => '?', 'email' => '?'] )
            ->setParameter( 1, 'Jimy Doe' )
            ->setParameter( 2, 'jimy@doe.com' )
            ->execute();
    }
} catch ( Exception $e ) {
    echo "Failed";
}