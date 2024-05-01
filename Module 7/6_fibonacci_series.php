<?php 
$first = 0;
$second = 1;
$count = 0;
$fibo;
echo "Enter number of terms: ";
fscanf(STDIN, "%d\n", $n);

while ($count < $n) {
    if ($count <= 1) {
        $fibo = $count;
    } else {
        $fibo = $first + $second;
        $first = $second;
        $second = $fibo;
    }
    echo $fibo . PHP_EOL;
    $count++;
}

