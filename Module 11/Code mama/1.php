<?php
fscanf(STDIN, "%s%s", $s, $t);
$isRotation = false;

for ($i = 0; $i < strlen($s); $i++) {
    $s = substr($s, 1) . substr($s, 0, 1);
    if (strcmp($s, $t) == 0) {
        $isRotation = true;
        $break;
    }
}


/*
if ($isRotation) {
    echo "True";
} else {
    echo "False";
}

*/
echo ($isRotation) ? "True" : "False";
