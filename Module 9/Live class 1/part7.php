<?php
//abstraction = ghost 
//abstraction is the process of hiding the implementation details and showing only the essential features of an object.
//abstraction is used to create a framework of an object.
//if i used abstract then i can not create an object
//only father property used son 
//
abstract class Father
{
    public function print100()
    {
        for ($i = 0; $i < 100; $i++) {
            echo "$i\n";
        }
    }
}

class Son extends Father
{
    public function demo()
    {
        parent::print100();
    }
}

$SonObj = new Son();
$SonObj->demo();
