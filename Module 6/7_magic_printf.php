<?php 
$fname = "Arif";
$mname = "Hossen";
$lname = "Sohag";


printf('My full name is %3$s %2$s %1$s',$lname,$fname,$mname);//single qoute use must otherwise error
echo"\n";
printf('The binary equivalent of %1$d is %1$b',12);
echo"\n";

$n = 45.784;
printf("%.2f\n",$n);

$m = 123; //0123
$p = 12 ;//0012
printf("%04d\n",$m);
printf("%04d\n",$p);


$m = 123.3253; //0123
$p = 12.155 ;//0012
printf("%07.2f\n",$m);
printf("%07.2f\n",$p);

