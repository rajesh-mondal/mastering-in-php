<?php
//Secure Hashing 
$secretmessage = "WOW";
$message = "This is a secret message";
$hash = mhash(MHASH_SHA512,$message,$secretmessage);
echo bin2hex($hash);
//baec50732989dbd427678cdb1129e0a0

