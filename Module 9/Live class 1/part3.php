<?php

//parameterized constructor
class car
{
    public function __construct($num1, $num2, $num3)
    {
        echo $num1 + $num2 + $num3;
    }

    public function drive()
    {
        echo "I am driving";
    }

    public function drivers()
    {
        echo "rahim khan";
    }
}

$CarObject = new car(1, 2, 3);
