<?php
$ch = curl_init('http://localhost:3030/curl/form_cookie.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS,'user=john&password=hello&submit=1');
$cookie_file = '/tmp/cookies.txt';
curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file);
echo curl_exec($ch);

$ch2 = curl_init('http://localhost:3030/curl/form_cookie.php');
curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER,true);
echo curl_exec($ch2);