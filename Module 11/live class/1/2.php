<?php
$date1 = new DateTime('2018-01-01 00:00:00');
$date2 = new DateTime('2018-02-01 00:00:00');
$date3 = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
echo $date1->format('M');
echo "\n";

$different = $date3->diff($date2);
echo $different->format('%y years %m %d days');
echo "\n";


echo $date3->format('Y-m-d g:i:s a');// a dile am ba pm dekhabe and g:i:s use korle 12 hour format asbe 
