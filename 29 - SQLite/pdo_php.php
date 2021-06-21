<?php
$pdo = new PDO( "sqlite:sqlite/db.sqlite" );
$stmt = $pdo->query( "SELECT * FROM users" );
print_r( $stmt->fetchAll( PDO::FETCH_ASSOC ) );

$users = [
    ['name' => 'Jane', 'email' => 'jane@doe.com'],
    ['name' => 'Jessy', 'email' => 'jessy@doe.com'],
    ['name' => 'Jimmy', 'email' => 'jimmy@doe.com'],
];

foreach ( $users as $user ) {
    $pdo->query( "INSERT INTO users (name, email) VALUES('{$user['name']}','{$user['email']}')" );
}

$stmt = $pdo->query( "SELECT * FROM users" );
print_r( $stmt->fetchAll( PDO::FETCH_ASSOC ) );