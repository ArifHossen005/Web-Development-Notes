<?php 

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i.PHP_EOL;
    if ($i == 8) {
        break;
    }
}

echo "========================".PHP_EOL;

for ($i = 20; $i < 30; $i++) {
if ($i <27) {
    continue;
}

echo $i.PHP_EOL;

}