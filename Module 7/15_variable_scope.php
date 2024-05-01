<?php
$name = "Earth";

function writeSomething()
{
    // global $name; // global scope
    echo $GLOBALS['name'];
}

writeSomething();
echo "\n";


function readSomething()
{
    $name = "Moon"; //local scope 
    echo $name;
}
readSomething();
echo "\n";

function readSomething2()
{
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}


function doExtra()
{
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}



readSomething2();
readSomething2();
readSomething2();
readSomething2();
doExtra();
doExtra();
readSomething2();
doExtra();
