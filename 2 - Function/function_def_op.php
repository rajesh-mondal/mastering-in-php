<?php

function serve( $foodType = "Coffee", $numberOfItems = "1 cup" ) {
    echo "{$numberOfItems} of {$foodType} has/have been served";
}

//$ft = "Coffee";
//$n = "4 cups";

//serve($ft,$n);

serve( "Salad", "2 Plates" );

echo "\n======\n";
//== Fixing return type
function sum( $x, $y, $z ): float { //float >> for rfeturn type fixing
    return $x + $y + $z;
}
echo sum( 5.5, 6., 7 );