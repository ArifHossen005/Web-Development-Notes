<?php
//What is $_SERVER["REQUEST_METHOD"]
//What is $_GET
//What is $_POST
//What is $_COOKIE
//What is $_SESSION
//What is $_REQUEST
//What is $_FILES
//What is $_ENV
//What is $_SERVER

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    //do something
    echo "This is a GET request";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //do something
    echo "This is a POST request";
}

if ($_SERVER["REQUEST_METHOD"] == "PUT") {

    //do something
    echo "This is a PUT request";
}


if ($_SERVER["REQUEST_METHOD"] == "DELETE") {

    //do something
    echo "This is a DELETE request";
}


if ($_SERVER["REQUEST_METHOD"] == "PATCH") {

    //do something
    echo "This is a PATCH request";
}

if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") {

    //do something
    echo "This is a OPTIONS request";
}
