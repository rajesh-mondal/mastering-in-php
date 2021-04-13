<?php
$filename = "/Users/Rajesh/Desktop/phpCoding/data/f2.txt";
//$existingData = file_get_contents( $filename );
$fp = fopen( $filename, "a" );
//fwrite( $fp, $existingData );
fwrite( $fp, "Mercury\n" );
fwrite( $fp, "Venus\n" );
fwrite( $fp, "Earth\n" );
fclose( $fp );