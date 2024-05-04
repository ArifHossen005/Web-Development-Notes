<?php
$name = "Sohag";
// value ache kina 
if (isset($name)) {
    echo "The name is Set";
} else {
    echo "The name is not set";
}

//value empty kina
if (empty($name)) {
    echo "The name is empty";
} else {
    echo "The name is not empty";
}

//best practice 
if (isset($name) && (is_numeric($name) || $name != '')) {
    echo "The name is Set";
} else {
    echo "The name is not set";
}
