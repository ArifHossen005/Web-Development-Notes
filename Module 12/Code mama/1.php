<?php 
fscanf(STDIN, "%d", $n);

$start = 0;
$end = $n;
$ans = 0; // Initialize ans to avoid undefined variable warning

while ($start <= $end) {
    $mid = floor(($start + $end) / 2);
    if ($mid * $mid == $n) {
        $ans = $mid;
        break;
    } else if ($mid * $mid < $n) {
        $start = $mid + 1;
        $ans = $mid;
    } else {
        $end = $mid - 1;
    }
}

echo $ans;
?>
