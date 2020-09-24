<?php
$string = "Hello World, How are You?";
$string2 = "Quick brown fox jumps over the lazy dog";
$parts = explode( " ", $string );
print_r( $parts );
echo PHP_EOL;
$orginal = join( " ", $parts ); // for adding all parts
echo $orginal;
echo PHP_EOL;
$orginal = implode( " ", $parts );
echo $orginal;
//for showing token charecterwise
$parts2 = str_split( $string );
print_r( $parts2 );

echo "--- multiple delimeter ---\n";
$parts3 = strtok( $string, " ," );
while ( $parts3 !== false ) {
    echo $parts3 . "\n"; // iterator
    $parts3 = strtok( " ," );
}
echo PHP_EOL;
$parts3 = preg_split( "/ |,/", $string2 );
print_r( $parts3 );