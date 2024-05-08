<?php
// array splice = jare select korbo shudu se asbe and main array theke oita bad jabe 

$fruits = array('apple', 'banana', 'orange', 'pineapple', 'mango', 'grape');
$random = array("a" => 12, "b" => 13, "c" => 14, "d" => 15, "e" => 16, "f" => 17, "g" => 18, "h" => 19, "i" => 20);

$newFruits = array("jackfruit", "coconut");
$someFruits  = array_splice($fruits, 2, 2, $newFruits); // select item kei nibe shudu
print_r($someFruits);
print_r($fruits);



$persons = array("a" => "John", "b" => "Jane", "c" => "Joe");

$somePersons = array_slice($persons, 1, 2); // slice korleo main array te theke jay 
print_r($somePersons);
print_r($persons);
