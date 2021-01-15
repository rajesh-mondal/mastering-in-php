<?php

function custom_error_hnadler($severity, $msg, $file, $line){
    switch($severity){
        case E_WARNING;
        echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
        break;
        case E_NOTICE;
        echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
        break;
        default:
        echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
    }
}

set_error_handler('custom_error_handler');

// trigger_error("This is an error");

// echo substr([1234],3);

function division($divident, $divisior){
    if(0==$divisior){
        trigger_error("Cannot divide by 0");
    }else{
        return $divident/$divisior;
    }
}

echo division(8,0);