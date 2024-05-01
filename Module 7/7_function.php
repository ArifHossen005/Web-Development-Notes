<?php

function isEven($number)
{
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}


$n = 13;
if (isEven($n)) {
    echo "$n is even";
} else {
    echo "$n is odd";
}


/*
function evenOrOdd($number)
{

    if ($number % 2 == 0) {
        return "$number is even";
    } else {
        return "$number is odd";
    }
}

echo evenOrOdd(10);
*/