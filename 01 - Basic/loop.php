<?php
//printing star program
for ( $i = 1; $i < 10; $i++ ) {
    //echo $i;
    echo PHP_EOL;
    for ( $j = 0; $j < $i; $j++ ) {
        echo "*";
    }
}
echo PHP_EOL;

$i = 0;
while ( $i < 10 ) {
    $i++;
    echo $i . PHP_EOL;
}

echo PHP_EOL;

$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while ( $i < 10 );

echo "Go to\n";
$i = 0;
a:$i++;
echo $i . PHP_EOL;
if ( $i < 10 ) {
    goto a;
}

//***********
echo "Loop Again";
for ( $i = 10, $j = 1; $i > 0; $i--, $j++ ) {
    echo $i . ":" . $j;
    //echo $i.":".(11-$i);
    echo PHP_EOL;
}
