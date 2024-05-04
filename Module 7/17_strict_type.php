<?php

declare(strict_types=1); // bhu khuje dey jodi same type data na dey 

echo "\n";
echo "\n";
//multiple type hint
function mySelf(string $name, int|string $age, $address)
{
    echo "My name is $name. I am $age years old. My address is $address.";
}

mySelf("123", 20, "123 Main Street");
