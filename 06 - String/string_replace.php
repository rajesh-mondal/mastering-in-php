<?php
$string = "Quick Brown brown Fox fox jump over the lazy dog";
//$replaceString = str_replace( 'brown', 'Brown', $string); //case sensitively search
//$replaceString = str_ireplace( 'brown', 'red', $string, $count ); //case isensitively search
$replaceString = str_ireplace( array( 'brown', 'fox' ), array( 'red', 'cat' ), $string, $count ); //case isensitively search
echo $replaceString;
echo PHP_EOL;
echo $string;
echo PHP_EOL;
echo "Total Replace: {$count}";
