<?php
//associative array to JSON object encode 

$person = ["name" => "John", "age" => 30, "city" => "New York"];
$JSON = json_encode($person);
echo $JSON;

// json lint is a browser tool which can be used to validate json data
