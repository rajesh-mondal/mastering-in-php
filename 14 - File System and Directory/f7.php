<?php
const FILENAME = "php.local.com:80\php\crud\assets\js\script.js";
//echo pathinfo(FILENAME,PATHINFO_BASENAME); // for base name
//echo pathinfo(FILENAME,PATHINFO_DIRNAME); //for current directory
//echo pathinfo(pathinfo(FILENAME,PATHINFO_DIRNAME),PATHINFO_BASENAME); //last part of address
//echo pathinfo(FILENAME,PATHINFO_EXTENSION); // for extension
echo pathinfo(FILENAME,PATHINFO_FILENAME); // for extension 