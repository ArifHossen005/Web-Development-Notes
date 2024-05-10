<?php
/*
fscanf(STDIN, "%d%d", $price, $discount);

$result = $price - ($price * ($discount / 100));

$formatted_result = number_format($result, 2);
echo "Price: {$formatted_result}\n";

*/

// another way to take user input 

/*

$data = trim(fgets(STDIN));
$input = explode(" ", $data);

$price = $input[0];
$discount = $input[1];

$totalDiscount = $price - ($price * ($discount / 100));

echo "Price: ".number_format((float)$totalDiscount,2)."";

*/
fscanf(STDIN, "%f%f%f", $wheel, $body, $figure);
$totalWheel = (int)($wheel / 4);
$totalFigure = (int)($figure / 2);

echo min($totalWheel, $body);
