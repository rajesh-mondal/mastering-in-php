<?php
//phpinfo();
$ch = curl_init('https://localhost/curl/hello.php');
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
$error = curl_error($ch);
if($error){
    echo $error;
}