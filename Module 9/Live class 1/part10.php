<?php

// Access Static & Non-Static Properties inside the class *self::  $this->
//Regular use purpose we use static ,if we use static keyword then dont need to create object
//static kono kichu jodi same class e use kori tahole self:: use korte hobe
// r jodi static na hoi tahole this-> use korte hobe 


class MyGadgets
{

    public static $myDSLRCameraName = "Canon 200D";

    public  $myMobileName = "Android Phone";

    public static function Chata()
    {
        echo "I am Chata";
    }

    public function HandWatch()
    {
        echo "I am HandWatch";
    }


    public static function DSLR()
    {
        echo self::$myDSLRCameraName;
    }


    public function Mobile()
    {
        echo $this->myMobileName;
    }
}


MyGadgets::DSLR();

// 1. Create Object
// 2. Access From this 
