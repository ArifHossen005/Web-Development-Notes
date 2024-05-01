<?php


function doTaskA()
{
    echo "Step A Done\n";
}
function doTaskB()
{
    echo "Step B Done\n";
}
function doTaskC()
{
    echo "Step C Done\n";
}
function doTaskD()
{
    echo "Step D Done\n";
}
function doTaskE()
{
    echo "Step E Done\n";
}
/*
function doTheLargeFunction()
{
    echo "Step A Done\n";
    echo "Step B Done\n";
    echo "Step C Done\n";
    echo "Step D Done\n";
    echo "Step E Done\n";
}
*/
function doTheLargeFunction()
{
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doTheLargeFunction();
