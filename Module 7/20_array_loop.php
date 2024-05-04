<?php
//indexed array
$fruits = ["apple", "banana", "orange"];
$totalFruits = count($fruits);

echo "Total fruits: $totalFruits\n";

for ($i = 0; $i < $totalFruits; $i++) {
    echo $fruits[$i] . "\n";
}

echo "\n";

foreach ($fruits as $fruits) {
    echo $fruits . "\n";
}

echo "\n";

//associative array(key, value)
$countires = [
    "Indonesia" => "Jakarta",
    "Malaysia" => "Kuala Lumpur",
    "Singapore" => "Singapore",
    "Philippines" => "Manila",
    "Thailand" => "Bangkok"
];


foreach ($countires as $country => $city) {
    echo "$city\n";
}

echo "\n";




$mathMarks =
    [
        'john' => 80,
        'jane' => 70,
        'joe' => 90,
        'jack' => 60
    ];


//calculate the grade 



echo "\n";

function calculateGrade($marks)
{

    if ($marks >= 80) {
        return "A";
    } elseif ($marks >= 70) {
        return "B";
    } elseif ($marks >= 60) {
        return "C";
    } elseif ($marks >= 50) {
        return "D";
    } else {
        return "F";
    }
}

$johnMarks = $mathMarks['john'];
$johnGrade = calculateGrade($johnMarks);
echo 'John\'s grade: ' . $johnGrade . "\n";


echo "\n";
//multidimensional array
$marks = [
    'john' => [
        'maths' => 80,
        'english' => 90
    ],
    'jane' => [
        'maths' => 70,
        'english' => 80
    ]
];

foreach ($marks as $mark => $value) {
    foreach ($value as $subject => $mark) {
        echo "$mark\n";
    }
}
