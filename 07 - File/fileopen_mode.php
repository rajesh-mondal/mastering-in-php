<?php

$filename = "/Users/Rajesh/Desktop/phpCoding/data/f2.txt";
/*
// w+ mode
$fp = fopen( $filename, "w+" );
fwrite( $fp,"Uranus" );
rewind( $fp );
$line = fgets( $fp );
echo $line; */

/*
// r+ mode
$fp = fopen( $filename, 'r+' );
$line = fgets( $fp );
echo $line;
fwrite( $fp,"Uranus\n" );
$line = fgets( $fp );
echo $line;
fseek( $fp,0 ); // or rewind($fp);
fwrite( $fp,"Venus" );
fclose( $fp ); */

// w+ mode
$fp = fopen( $filename, "a+" );
fwrite( $fp, "Uranus\n" );
rewind( $fp );
fwrite( $fp, "Neptune\n" );
$line = fgets( $fp );
echo $line;