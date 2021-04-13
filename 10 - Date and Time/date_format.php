<?php
date_default_timezone_set( "Asia/Dhaka" );
echo date( 'd/m/y' );
echo PHP_EOL;
echo date( 'dS F, Y' ); //25th December 2019
echo PHP_EOL;
echo date( 'dS F, Y h:i:s' ); // for 24 hour format 'H:i:s'
echo PHP_EOL;
echo date( 'dS F, Y h:i:s a' ); // for am/pm //A for capital am - a for small am/pm
echo PHP_EOL;
echo date( 'dS F, Y h:i:s A', time() + 24 * 60 * 60 ); // for am/pm //A for capital am - a for small am/pm
echo "\n";
echo date( 't' );
echo PHP_EOL;
echo date( 'z' ); //th day of the year
echo PHP_EOL;