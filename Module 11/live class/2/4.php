<?php
// crud  c=create(post) r=read(get) u=update(put) d=delete(delete) simple-update(patch)
//what is file_get_contents
//JSON request and response





if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //do something
    $plainText = file_get_contents("php://input"); //data from postman received and data is text
    $plainArray = json_decode($plainText, true); //now text data convert array 

    $plainArray['num1'];
    $plainArray['num2'];
    $sum = $plainArray['num1'] + $plainArray['num2'];
    $sub = $plainArray['num1'] - $plainArray['num2'];
    $mul = $plainArray['num1'] * $plainArray['num2'];
    $div = $plainArray['num1'] / $plainArray['num2'];

    $result = ["sum=" => $sum, " sub=" => $sub, " mul=" => $mul, " div=" => $div];
    $JSON = json_encode($result);
    echo $JSON;
}
