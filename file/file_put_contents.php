<?php
$filename = "/Users/Rajesh/Desktop/phpCoding/data/f2.txt";
file_put_contents( $filename, "Mars\n", FILE_APPEND | LOCK_EX );
file_put_contents( $filename, "Jupitar\n", FILE_APPEND | LOCK_EX );