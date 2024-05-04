<?php
$person = array(
    "fname" => "Joe",
    "lname" => "Doe"
);

unset($person["fname"]);
print_r($person);
