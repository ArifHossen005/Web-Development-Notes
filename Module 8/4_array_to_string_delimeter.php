<?php
//delimeter means comma with space
$vegetables = explode(', ', 'carrots, celery, peas'); // $vegetables is an array containing ['carrots', 'celery', 'peas']
$foods = preg_split('/(, |,)/', 'carrots, celery, peas,mango'); // $vegetables is an array containing ['carrots', 'celery', 'peas']

echo $vegetables[0]; // This will output 'celery'
echo "\n";


//array to string 
$vegetableString = join(', ', $vegetables); // $vegetableString is a string containing 'carrots, celery, peas'
echo $vegetableString;
echo "\n";
echo count($vegetables);


echo count($foods);
print_r($foods);
