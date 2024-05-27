<?php
$fruits = array("apple", "banana", "orange");
$allfruits = explode(" ", $fruits);
echo $allfruits;
echo "\n";



//json convert 
$allfruits = json_encode($fruits);
print_r($allfruits);
echo "\n";



$allfruits = json_decode($allfruits);
print_r($allfruits);
echo "\n";



//reverse
$allfruits = implode(" ", array_reverse($fruits));
echo $allfruits;
echo "\n";
