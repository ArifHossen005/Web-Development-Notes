<?php
function printN($i)
{
    if ($i > 10) {
        return;
    }
    echo $i . PHP_EOL;
    $i++;
    printN($i);
}

//printN(1);


function printNumber($counter, $end, $stepping = 1)
{
    if ($counter > $end) {
        return;
    }
    echo $counter . PHP_EOL;
    $counter += $stepping;
    printNumber($counter, $end);
}

printNumber(21, 37, 2);
