<?php
//Hashing
echo md5("Let There be Light");
echo "\n";
echo sha1("Let There be Light");
echo "\n";
//print_r(hash_algos());
echo hash("md5", "Let There be Light");
echo "\n";
echo mhash(MHASH_MD5, "Let There be Light");