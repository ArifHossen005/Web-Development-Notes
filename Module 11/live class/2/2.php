<?php
//multidimensional  associative array to json Encode
//associative array to json Encode 

$person = [
    ["name" => "John", "age" => 30, "city" => "New York"],
    ["name" => "Jane", "age" => 25, "city" => "London"],
    ["name" => "Bob", "age" => 40, "city" => "Paris"],
];
$json = json_encode($person);
echo $json;
