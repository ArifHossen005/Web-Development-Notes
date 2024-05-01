<?php 
echo"\n";
for ($i = 0; $i < 100; $i++) {
if($i%7==0) echo"$i".PHP_EOL;
if($i %11==0) echo"$i".PHP_EOL;
}

echo"\n";
for ($i = 0; $i < 100; $i++) {
echo $i % 7 == 0? $i ."\n":'';
echo $i % 11 == 0? $i ."\n":'';
}

echo"\n";
for ($i = 0,$j =0; $i < 100; $i+=7,$j+=11) {
echo $i ." ".PHP_EOL;
echo $j<100 ? $j.PHP_EOL:'';
}