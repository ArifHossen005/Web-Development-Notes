<?php 
echo"Hello World";
echo "\n";
$name = "Earth";
$month = "November";
var_dump($name,$month );// data type and output print 
echo"\n";

/*
integer 
double
float
boolean
null
string
Array
object*/ 

$fullName = "Md Arif hossen";
$uname=strtoupper($fullName);
echo"My full name is {$uname}\n";
printf("My full name is %s %s",$uname,"Allah\n");

$planet1 = "Mercury";
$planet2 = "jupiter";

echo"The smallest planet is ".$planet1."and the biggest planet  is ".$planet2."\n";
echo"The smallest planet is {$planet1} and the biggest planet  is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet  is %s \n",strtoupper($planet1),strrev($planet2));

