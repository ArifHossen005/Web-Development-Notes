<?php
//A class's constructor method that runs automatically when an object is created from the class

class Human
{
    public $name;
    public $age;
    public function __construct($personName, $personAge = 0)
    {
        $this->name = $personName;
        $this->age = $personAge;
    }
    function SayHi()
    {
        echo "Hello ,Assalamualaikum\n";
    }

    function SayName()
    {
        echo "My name is " . $this->name . "\n";
        echo "I am " . $this->age . " years old\n";
    }
}

$h1 = new Human('Rubel', '23');
$h2 = new Human('Arif', '25');
$h3 = new Human('Sohag', '26');
$h4 = new Human('Sohag');
$h1->SayHi();
$h1->SayName();
$h2->SayName();
$h3->SayName();
