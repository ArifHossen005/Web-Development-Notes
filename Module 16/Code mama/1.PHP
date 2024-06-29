<?PHP
fscanf(STDIN, "%s", $n);
$sum = 0;

for ($i = 0; $i < strlen($n); $i++) {

    $sum = $sum + $n[$i];
}

if ($sum % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}