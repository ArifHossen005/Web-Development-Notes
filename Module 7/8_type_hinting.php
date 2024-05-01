<?php


function factorial($number)
{
    if (gettype($number) != "integer") {
        return "invalid number";
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = "abc";
echo "Factorial of $number is " . factorial($number);
