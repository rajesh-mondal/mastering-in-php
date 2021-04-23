<?php

/*$name = "Earth"; //global scope

function doSomething(){
global $name;
echo $name;
echo PHP_EOL;
echo $GLOBALS['name'];
}
doSomething();
 */

echo "\n======\n";
function doSomething() {
    //$name ="Earth"; //local scope
    //echo $name;
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;
}

function doExtra() {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doSomething();
doExtra();
doExtra();