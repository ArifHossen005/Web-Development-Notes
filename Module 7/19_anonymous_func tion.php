<?php

//anonymous  function 

(function () {
    echo "Step C Done\n";
})();



//anonymous  function ASSIGN to variable
echo "\n";
$name = function ($age) {
    echo "I am $age years old\n";
};

$name(25);
