<?php
$students = array(
    "John",
    "Jane",
    "Mark",
    "Sarah",
    123,

);

//echo count($students);
//var_dump($students);
//echo "$students[2]" ."<br>";

$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo "$students[$i]" . "\n";
}

echo "\n";

for ($i = $n - 1; $i >= 0; $i--) {
    echo $students[$i] . "\n";
}
