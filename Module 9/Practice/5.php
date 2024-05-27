<?php
//Discussing the scope of parent and child classes
class ParentClass
{
    protected $name;
    function __construct($nameDao)
    {
        $this->name = $nameDao;
        $this->sayHi();
    }

    function sayHi()
    {
        echo "Hi from {$this->name}" . "\n";
    }
}

class ChildClass extends ParentClass
{
    function sayHi()
    {
        parent::sayHi();
        echo "Hello";
    }
}

$c = new ChildClass("Arif");
