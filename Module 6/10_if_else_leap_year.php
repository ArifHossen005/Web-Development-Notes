<?php 
$year = 2022;

if($year%4==0 && $year%100== 0 && $year%400==0)
{
    printf("$year is Leap year\n");
}
elseif($year%4== 0 && $year%100== 0)
{
    printf("$year is not Leap year\n");

}

elseif($year%4== 0)
{
    printf("$year is a Leap year\n");

}
else{
    printf("$year is not leap year");
}

echo"\n";

if($year%4== 0  && ($year%100== 0  || $year%400!== 0))
{
    echo"$year is a leap year";
}
else{
    echo"$year Not a leap year";
}
