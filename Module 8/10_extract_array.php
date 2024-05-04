<?php
$fruits = array('apple', 'banana', 'orange', 'grape', 'mango', 'pineapple', 'strawberry');

//$someFruits  = array_slice($fruits, 2); //mane 2 theke last element nibe 
//someFruits  = array_slice($fruits, 0, 2); $ //mane 0 theke 2 porjonto nibe

//seser element -1 theke count hoi 
$someFruits  = array_slice($fruits, -6, -1); //mane 0,1,(2  theke  pichoner theke count -1 -2 bad dibe )

//print_r($someFruits);


//associative array

$random = array("a" => "apple", "b" => "banana", "c" => "orange", 12 => 78, "d" => "grape", "e" => "mango", "f" => "pineapple", "g" => "strawberry");
$randomData = array_slice($random, 3, null, true);
print_r($randomData);
