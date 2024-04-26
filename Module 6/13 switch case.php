<?php 
$n = 12;
$r = $n %2;

switch ($r) {
    case 0:
    echo"{$n} is an even number\n";
    break;
    default: 
    echo "{$n} is an odd number\n ";
}

$color = "green";

switch ($color) {
    case "green":
        echo ucwords($color)." is my favourite";
        break;
    case"red":
         echo ucwords($color)." is my favourite";
        break;

        /*
case "green":
case "red":
    echo "red is my favourite";
        break;
        */
    case"blue":
        echo "blue is not my mine ";
        break; 
     default:
     echo "this is a random color";   

    }