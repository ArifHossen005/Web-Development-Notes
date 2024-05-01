<?php 
$i = 0;
while ($i < 10) {
    echo $i.PHP_EOL;
    $i++;
}

echo"========================".PHP_EOL;

$j = 0;
while ($j++ < 10) {
    echo $j.PHP_EOL;
}
echo"========================".PHP_EOL;

$j = 0;
while (++$j < 10) {
    echo $j.PHP_EOL;
}
echo"========================".PHP_EOL;
