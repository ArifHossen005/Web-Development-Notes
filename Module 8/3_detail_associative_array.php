<?php

$foods = [
    'vegetable' => 'carrots, broccoli, celery',
    'fruit' => 'apples, oranges, bananas',
    'meat' => 'chicken, beef, pork',
    'dairy' => 'milk, yogurt, cheese'
];

// new values add method 

$foods['fruit'] = $foods['fruit'] . ", grapes, watermelon";
$foods['dairy'] .= ", butter";

echo count($foods);
/*
echo count($foods);
echo "\n";
echo $foods['vegetable'];
echo "\n";
*/
foreach ($foods as $key => $value) {
    echo $key . "=" . $value . "\n";
}

echo "\n";

/*
$keys = array_keys($foods);
print_r($keys);

$keys = array_values($foods);
print_r($keys);
*/