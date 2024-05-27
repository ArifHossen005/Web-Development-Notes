<?php
$persons = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York",
    "country" => "USA",
    "hobbies" => array("music", "sports", "art")

);

$personObject = json_encode($persons);
echo $personObject;

file_put_contents('person.txt', $personObject, FILE_APPEND);


// kono kichur sese likhake bole append ba sese add kora 
//kono kichur first e add korake bole prepend