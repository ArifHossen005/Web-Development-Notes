<?php

//add 10 days
$date = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
echo $date->format('Y-m-d H:i:s');
echo "\n";
$date->add(new DateInterval(" P5Y10D ")); //P fixed then P2Y5M6D
echo $date->format('Y-m-d H:i:s a'); // a dile am pm asbe 


echo "\n";
$date->sub(new DateInterval(" P2Y10D ")); //P fixed then P2Y5M6D
echo $date->format('Y-m-d H:i:s a'); // a dile am pm asbe 


echo "\n";
$date1 = new DateTime('2018-01-01 00:00:00');
$date2 = new DateTime('2018-02-01 00:00:00');
$different = $date1->diff($date2);
echo $different->format('%r%a days');// small r use korle + asbe nah 
