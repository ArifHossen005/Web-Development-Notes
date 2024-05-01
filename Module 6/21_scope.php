<?php 


$name = "Md Arif Hossen";

function myFun(){
    global $name;
    echo"$name";
}


myFun();
echo"\n";

function myFun1(){
$name = "Sohag khan ";
echo "$name";
}
myFun1();