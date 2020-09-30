<?php
$filename = "/Users/Rajesh/Desktop/phpCoding/data/f1.txt";
if ( is_readable( $filename ) ) {
    $fp = fopen( $filename, 'r' );
    $line = fgets( $fp );
    echo $line;
    while ( $line = fgets( $fp ) ) {
        echo $line;
    }
    //rewind( $fp ); // start from first position again
    fseek( $fp, 5 );
    while ( $line = fgets( $fp ) ) {
        echo $line . "-";
    }
    fclose( $fp );
    echo PHP_EOL;
    //To read all element one time
    $data = file( $filename );
    echo $data[2];
    print_r( $data );
    echo "\n --Another function--\n";
    $data = file_get_contents( $filename );
    echo $data;
}