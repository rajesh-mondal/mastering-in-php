<?php
$x = 7;
$y = 5;

function greaterOrSmaller( $x, $y ) {
    if ( $x > $y ) {
        return 1;
    } elseif ( $x == $y ) {
        return 0;
    } else {
        return -1;
    }
}

if ( greaterOrSmaller( $x, $y ) == 1 ) {
    echo "{$x} is greater then {$y}";
} else if ( greaterOrSmaller( $x, $y ) == 0 ) {
    echo "{$x} is equal to {$y}";
} else if ( greaterOrSmaller( $x, $y ) == -1 ) {
    echo "{$x} is smaller than {$y}";
}

echo "\n== Spaceship Operator ==\n";
$result = $x <=> $y;
if ( $result == 1 ) {
    echo "{$x} is greater then {$y}";
} else if ( $result == 0 ) {
    echo "{$x} is equal to {$y}";
} else if ( $result == -1 ) {
    echo "{$x} is smaller than {$y}";
}