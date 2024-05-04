<?php


function factorial($number)
{
    if (gettype($number) != "integer") {
        return "invalid number";
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = "abc";
echo "Factorial of $number is " . factorial($number);



echo "\n";
echo "\n";
//multiple type hint
function mySelf(string $name, int|string $age, $address)
{
    echo "My name is $name. I am $age years old. My address is $address.";
}

mySelf("John", 20, "123 Main Street");


echo "\n";
echo "\n";
//nullable type hint
function mySelf2(?string $name, int|string $age, $address)
{
    echo "My name is $name. I am $age years old. My address is $address.";
}

mySelf2(null, 20, "123 Main Street");
