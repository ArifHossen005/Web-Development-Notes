<?php
//Writing a Real Life Useful Class

class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;
    private $alpha;
    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    public  function getColor()
    {
        return $this->color;
    }
    public  function getRGBColor()
    {
        return array($this->red, $this->green, $this->blue);
    }

    public  function readRGBColor()
    {
        echo "Red: " . $this->red . "\n";
        echo "Green: " . $this->green . "\n";
        echo "Blue: " . $this->blue . "\n";
    }

    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    private function parseColor()
    {
        if ($this->color) {

            list($this->red, $this->green, $this->blue)  = sscanf($this->color, "%02x%02x%02x");
        } else {
            list($this->red,  $this->green,  $this->blue) = array(0, 0, 0);
        }
    }

    public function getRed()
    {
        return $this->red;
    }
    public function getGreen()
    {
        return $this->green;
    }
    public function getBlue()
    {
        return $this->blue;
    }
}


$myColor = new RGB("#ff0000");
$myColor->readRGBColor();
