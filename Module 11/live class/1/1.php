<?php
//str to time = means string to time 

$date =  strtotime('today');  // 'today' 
echo date('Y-m-d H:i:s') . "\n";


$after10Days = strtotime(' today +10 days 6 hours 30 minutes 30 seconds ');

echo date('Y-m-d H:i:s', $after10Days);
echo "\n";

$week = date('W', $date);  //capital letter W
echo $week;
echo "\n";

$tomorrow = strtotime('tomorrow');
echo  date('D', $tomorrow) . " " . "    " . date('d/m/Y H:i:s', $tomorrow);
echo "\n";


$date = strtotime("22nd May2024");
echo date("d/m/Y", $date);
