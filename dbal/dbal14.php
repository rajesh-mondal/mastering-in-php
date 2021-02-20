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
        $qb->delete( 'persons' )
            ->where( 'id=?' )
            ->setParameter( 1, 6 )
            ->execute();
    }
} catch ( Exception $e ) {
    echo "Failed";
}