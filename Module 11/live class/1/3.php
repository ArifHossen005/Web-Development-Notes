<?php
$date = new DateTime('now');
$string = $date->format('Y-m-d H:i:s');
echo $string;
echo "\n";

//space kom lagbe 
$timestamp = time(); //$timestamp = $date->getTimestamp();
echo $timestamp;
echo "\n";

//date form timestamp;
$date =  new DateTime('@' . $timestamp);
echo $date->format('Y-m-d H:i:s');
echo "\n";

$date2 = date('Y-m-d H:i:s', $timestamp);
echo $date2;
