<?php

// Reading file
$data = file_get_contents('data.txt'); // Read data from the file "data.txt"

$unserialized = unserialize($data); // Unserialize the data
print_r($unserialized); // Output the unserialized data
echo "\n";
