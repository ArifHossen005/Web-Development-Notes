<?php

$startTime = microtime(true);
$websiteData = file_get_contents('https://jsonplaceholder.typicode.com/users');

$endTime = microtime(true);

$executionTime = ($endTime - $startTime) * 1000;
echo "Execution Time: " . $executionTime . "ms";


// file delete korte unlink use kore 

unlink('filename.txt');

/*

if (file_exists('filename.txt')) {
    unlink('filename.txt');
    echo "File deleted successfully";
}
*/


//file copy 

copy('data.txt', 'filename2.txt');
