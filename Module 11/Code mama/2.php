<?php
fscanf(STDIN, "%s%s", $largeString, $smallString);
$count = 0;
for ($i = 0; $i <= strlen($largeString) - strlen($smallString); $i++) {
    $temp = substr($largeString, $i, strlen($smallString));
    if (strcmp($temp, $smallString) == 0) {
        $count++;
    }
}
echo $count;
