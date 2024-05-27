<?php

//set cookies store (backend e data store )
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $plainText = file_get_contents("php://input"); //data from postman received and data is text
    $plainArray = json_decode($plainText, true); //now text data convert array 
    $username = $plainArray['username'];

    setcookie("username", $username, ["expires" => time() + (3600)]);
    echo "Success Cookie Set";
}

//read cookies store (backend e data read )
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $_COOKIE['username'];
}


//delete cookies store (backend e data delete )
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {


    setcookie("username", "", ["expires" => time() - (3600)]);
    echo "Success Delete Cookie";
}
