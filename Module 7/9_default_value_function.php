<?php
function food($foodName = "apple", $foodPrice = "200")
{
    echo "{$foodName} price is Rs {$foodPrice}";
}


$name = "Rice";
$price = 500;


food($name);
echo PHP_EOL;
food("mango", "300");
