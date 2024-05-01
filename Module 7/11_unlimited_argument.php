<?php

function addValue(int ...$n): int  // return type int
{
    $result = 0;
    for ($i = 0; $i < count($n); $i++) {
        $result += $n[$i];
    }
    return $result;
}

echo addValue(2, 3, 8, 9, 7);
echo "\n";


/*
function addValue2(int $x, int $y, int ...$n)  // return type int
{
    echo $x . "\n" . $n;
}
echo "\n";
addValue2(2, 3, 0, 7);
*/