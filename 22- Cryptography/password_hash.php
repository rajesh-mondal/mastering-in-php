<?php
//PHP built in password_hash function
$password = "Secret Password";
$hash = password_hash($password, PASSWORD_ARGON2I,['cost'=>12]);
echo $hash."\n";

$userInput = "Secret Password"; 
if(password_verify($userInput, $hash)){
    echo "Authenticated";
}else{
    echo "Access Denied";
}