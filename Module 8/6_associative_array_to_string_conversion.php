<?php
$student  = array(
    "name" => "John",
    "age"  => 20,
    "city" => "New York",
    "phone" => "123-456-7890",
    "email" => "zjLmN@example.com"
);


print_r($student);

echo $student['name'] . " " . $student['age'] . " " . $student['city'];
echo PHP_EOL;

printf("%s %s %s", $student['name'], $student['age'], $student['city']);
echo PHP_EOL;

//serialized string
echo serialize($student);

$serialized = serialize($student);
$newStudent = unserialize($serialized);
print_r($newStudent);

//json 
$jsonData = json_encode($student);
echo $jsonData;
$jsonDecode = json_decode($jsonData, true);
echo PHP_EOL;
print_r($jsonDecode);
