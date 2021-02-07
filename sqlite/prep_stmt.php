<?php
$pdo = new PDO( "sqlite:sqlite/db.sqlite" );
$stmt = $pdo->prepare( "select * from users where email = ?" );
$email = "john@doe.com";
$stmt->execute( [$email] );
print_r( $stmt->fetchAll( PDO::FETCH_ASSOC ) );