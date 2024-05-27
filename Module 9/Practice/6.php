<?php
// More examples on inheritance

class Shape
{
    protected $name;
    protected $area;

    public function __construct($Nam)
    {
        $this->name = $Nam;
        $this->calculateArea();
    }

    public function getArea()
    {
        echo "This {$this->name} 's area is {$this->area}.\n";
    }
}

class Triangle extends Shape
{
    private $a, $b, $c;

    public function __construct($name, $a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct('Triangle');
    }

    public function calculateArea()
    {
        $perimeter = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
    }
}

class Rectangle extends Shape
{
    private $a, $b;

    public function __construct($name, $a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct('Rectangle');
    }

    public function calculateArea()
    {
        $this->area = $this->a * $this->b;
    }
}

// Example usage
$triangle = new Triangle("Triangle", 3, 4, 5);
$triangle->getArea(); // This will calculate and print the area of the triangle

$rectangle = new Rectangle("Rectangle", 4, 5);
$rectangle->getArea(); // This will calculate and print the area of the rectangle
