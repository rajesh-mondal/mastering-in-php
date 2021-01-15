<?php
// Singleton Pattern
class FileWriter {
    static $instance = [];
    private $filename;

    function __construct( $filename ) {
        $this->filename = $filename;
    }

    static function getInstance( $filename ) {
        if ( !isset( self::$instance[$filename] ) ) {
            self::$instance[$filename] = new FileWriter( $filename );
        }
        return self::$instance[$filename];
    }

    function writeData( $data ) {
        echo "Writing Data to {$this->filename}\n";
    }

    static function dump() {
        print_r( self::$instance );
    }
}

$fw1 = FileWriter::getInstance( "/tmp/abcd.txt" );
$fw2 = FileWriter::getInstance( "/tmp/abc.txt" );
$fw3 = FileWriter::getInstance( "/tmp/abcd.txt" );
$fw4 = FileWriter::getInstance( "/tmp/abcd.txt" );
FileWriter::getInstance( "/tmp/ab.txt" )->writeData( 'some data' );

$fw1->writeData( 'some data' );
$fw2->writeData( 'some data' );
$fw3->writeData( 'some data' );
$fw4->writeData( 'Some Data' );

FileWriter::dump();