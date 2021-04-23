<?php
$name = "Rajesh";

$string01 = "my name is $name \n \t New Data \n"; // \t for tab
//$string01 = 'my name is $name \n \t'; // not right way to print a string
echo $string01;

// Another way to write string
//herdoc
$herdoc = <<<EOD
data 1
new line
more text
my name is {$name}
EOD;
echo $herdoc;

//nulldoc
$herdoc = <<<'EOD'
data 1
new line
more text
my name is {$name}
EOD;
echo $herdoc;