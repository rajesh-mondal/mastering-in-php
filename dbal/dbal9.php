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
        $qb->select( '*' )->from( 'students' )->setMaxResults( 10 );
        echo $qb->getSQL().PHP_EOL;
        $result = $qb->execute()->fetchAll();
        print_r( $result );
    }
} catch ( Exception $e ) {
    echo "Failed";
}