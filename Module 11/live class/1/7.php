<?php
//associative array

$persons = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York",
    "country" => "USA"

);
print_r($persons);

$personString  = serialize($persons);
echo $personString;
echo "\n";


$personString1 = json_encode($persons);
echo $personString1;
echo "\n";

$personString2 = json_encode($persons, true); // json decode korle ekta true use korte hobe 
print_r($personString2);
echo "\n";
