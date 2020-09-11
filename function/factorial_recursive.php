<?php
function factorial( $n ) {
    if ( $n <= 1 ) {
        return 1;
    }
    return $n * factorial( $n - 1 );
}
echo factorial( 5 );

/*
//How it runs...
5* factorial(5-1)=4;
4* factorial (3);
3* factorial (2);
2* factorial (1) / 2*1
So, 5*4*3*2*1 = 120;
 */