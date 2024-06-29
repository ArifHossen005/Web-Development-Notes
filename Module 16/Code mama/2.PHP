<?php 
$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));

$n = (int)$line1;
$data = explode(" ", $line2);

$pos = 0;
$neg = 0;
for ($i = 0; $i < $n; $i++) {
    if ((int)$data[$i] > 0) {
        $pos++;
    } else {
        $neg++;
    }
}

print $pos > $neg ? "Positivity" : "Negativity";
?>
