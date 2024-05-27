<?php
//Topic : class,Objects,Methods and Properties

class Human
{
    public $name;
    function SayHi()
    {
        echo "Hello ,Assalamualaikum\n";
    }

    function SayName()
    {
        echo "My name is " . $this->name . "\n";
    }
}

class Cat
{
    function SayHi()
    {
        echo "Meow,Meow,Meow\n";
    }
}

class Dog
{
    public $name;
    function SayHi()
    {
        echo "Bark,Bark,Bark\n";
        $this->Hello();
    }

    function Hello()
    {
        echo "Hello " . $this->name . "\n";
    }
}



$h = new Human();
$h->SayHi();
$h->name = "Ahmad"; // set operation 
echo $h->name;     // get 

$h->SayName();






$c = new Cat();
$c->SayHi();

$d = new Dog();
$d->SayHi();
$d1 = new Dog();
$d1->name = "Tommy";
$d1->SayHi();
