<?php
require "vendor/autoload.php";

$connectionParams = array(
    'dbname'   => 'laravel_cms',
    'user'     => 'root',
    'password' => '',
    'host'     => 'localhost',
    'driver'   => 'mysqli',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection( $connectionParams );
$qb = $conn->createQueryBuilder();
try {
    if ( $conn->connect() ) {
        $qb->select( 's.*' )
            ->from( 'status', 's' )
            ->join( 's', 'friends', 'f', 's.user_id = f.friend_id AND f.user_id = ?' )
            ->orderBy( 's.user_id', 'DESC' )
            //->join( 's', 'friends', 'f', 's.user_id = f.friend_id' )
            //->where( 'f.user_id = ?' )
            ->setParameter( 1, 1 );
        echo $qb->getSQL() . PHP_EOL;
        print_r( $qb->execute()->fetchAll() );
    }
} catch ( Exception $e ) {
    echo "Failed";
}