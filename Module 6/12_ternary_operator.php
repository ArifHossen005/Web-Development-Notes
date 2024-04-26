<?php 

$n = 12;
if ($n== 12) {
    echo"Twelve";
    }
    else if ($n== 10) {
    echo"Ten";
    }
    else
    {
        echo "a number";
    }
    
    echo"\n";
    $numberInWord = ($n==15) ?"twelve" :"A number";
    echo"$numberInWord";
    echo"\n";
    $result = ($n%2==0) ?"Even Number":"Odd number";
    
    echo "$result";
    echo"\n";
    


$result1 = (12 == $n) ? "twelve" : ((10==$n) ? "ten" : "Ekta number");

echo $result1;