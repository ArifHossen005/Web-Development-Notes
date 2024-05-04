<?php
$students = [
    "rahul",
    "rohit",
    "sachin",
    "saurav",
    "vijay",
    "virat",
];

$students[2] = "kohli";

$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}
echo "\n";
$student = array_pop($students);
//echo $student . "\n";
$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}

echo "\n";
$student = array_shift($students);
//echo $student . "\n";
$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}


// sese data add korbe or array_push();
echo "\n";
$students[] = "dhoni"; // sese data add korbe 
$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}


// sese data add korbe or array_push();
echo "\n";
array_push($students, "arif");
$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}


// prothome  data add korbe or array_unshift();
echo "\n";
array_unshift($students, "first");
$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}





//array_shift(); //First element delete  
//array_unshift(); //data entry
//array_pop(); //last element delete return
//array_push();//data entry
