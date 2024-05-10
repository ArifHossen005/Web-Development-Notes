<?php
//class 
//class means blueprint of object 

class car
{
    public $color = "red";
    public function drive()
    {
        echo "I am driving";
    }

    public function drivers()
    {
        echo "rahim khan";
    }
}

//object 
//object is an instance of class

$CarObject =  new car();
echo $CarObject->drive();
echo "\n";
echo $CarObject->color;
echo "\n";
echo $CarObject->drivers();
