<?php
$default_lat = 23.9;
$default_lon = 90.8;

$user_lat = 12.3;

//ternary operator
$lat = isset( $user_lat ) ? $user_lat : $default_lat;
echo $lat;
echo PHP_EOL;

//null collase operator
$lat = $user_lat ?? $default_lat;
echo $lat;