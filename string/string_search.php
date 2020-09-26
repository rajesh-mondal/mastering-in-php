<?php
$string = "Quick brown Fox fox jumps over the lazy dog";
$offset = strpos( $string, "fox" );
//echo stripos( $string, "fox" ); // case insensitively search
//echo strpos( $string, "fox", 13 ); // search with offset
echo PHP_EOL;
/*if( $offset !==false ){ //== check value === check value types
echo "Word was found\n";
}
else{
echo "Word was not found\n";
}
echo PHP_EOL; */
$string2 = "Quick brown Fox fox jumps over the lazy dog";
$offset = strripos( $string2, "Fox" );
echo $offset;