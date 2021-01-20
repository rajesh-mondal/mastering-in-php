<?php
$ch = curl_init('https://stadiumn.com/wp-content/uploads/2020/07/hhh.jpg');
//curl_setopt($ch, CURLOPT_VERBOSE,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_exec($ch);
// $info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// echo $info;
$info = curl_getinfo($ch);
print_r($info);

//get header
$headers = get_headers('https://stadiumn.com/wp-content/uploads/2020/07/hhh.jpg');
print_r($headers);