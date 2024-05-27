<?php
//time performance check in ms
$startTime = microtime(true);
for ($i = 0; $i < 1000; $i++) {
    $v = $i * $i;
}

$endTime = microtime(true);
$executionTime = ($endTime - $startTime) * 1000;
echo "Execution Time: " . $executionTime . "ms";
