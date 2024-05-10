<?php

//inheritance




class Father
{

    public function print100()
    {

        for ($i = 0; $i < 10; $i++) {
            echo $i . "\n";
        }
    }
}

class Son extends Father
{
    public function print100()
    {
        for ($i = 0; $i < 10; $i = $i + 2) {
            echo $i . "\n";
        }
    }
}

$newObject =  new Son();
$newObject->print100();
