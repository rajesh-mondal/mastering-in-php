<?php
//HMAC
$message = "This is a secret message";
$key = "MySecretPassword";
//print_r(hash_hmac_algos());
echo hash_hmac("whirlpool", $message, $key);