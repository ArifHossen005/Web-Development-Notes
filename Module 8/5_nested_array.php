<?php
$foods = [
    'vegetables' => explode(',', 'carrots, broccoli, spinach'),
    'meat' => explode(',', 'chicken ,pork,  ,eggs'),
    'dairy' => explode(',', 'milk, cheese, butter')
];

//print_r($foods);
array_push($foods['dairy'], 'yogurt', 'cream');

echo $foods['dairy'][4];
echo "\n";

$students = [
    'class' => [
        'student' => [
            'shubham',
            'sunny',
            'rahul'
        ],
    ]
];

echo $students['class']['student'][0] . "\n";
echo "\n";

$sample = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8, [9, 10, 11]]
];

echo $sample[2][3][1];
