<?php

//property value change manipulation using construct function
class car
{
    public $color = "red";

    public function __construct($colorName)
    {
        $this->color = $colorName;
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

$CarObject = new car("Green");

echo $CarObject->color;;
