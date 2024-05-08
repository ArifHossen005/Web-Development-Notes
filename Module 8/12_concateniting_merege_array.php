<?php

$fruits = array("apple", "banana", "orange", "pineapple", "mango");
$random = array("a" => 12, "b" => 13, "c" => 14, "d" => 15, "e" => 16, "f" => 17);



// Slice the $fruits array
$fruits1 = array_slice($fruits, 0, 3); // Slicing from index 0 to index 2
$fruits2 = array_slice($fruits, 3, null, true); // Slicing from index 3 to the end, preserving keys

// Combine the sliced arrays
$mergeFruits = array_merge($fruits1, $fruits2);

// Output the results
print_r($fruits1);
print_r($fruits2);
print_r($mergeFruits);

//merge two array
$merge = array_merge($fruits, $random);
print_r($merge);

//plus two array / concatenation

$fruitsPlus  = $fruits1 + $fruits2;
print_r($fruitsPlus);


$r1 = array_slice($random, 0, 3, true);
$r2 = array_slice($random, 3, null, true);
$new = array("x" => 25, "y" => 26, "z" => 27);
$r3 = $r1 + $r2 + $new;
print_r($r2);
print_r($r3);
