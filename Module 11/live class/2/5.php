<?php
//$session means user is logged in

//set session store (backend e data store )
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $plainText = file_get_contents("php://input"); //data from postman received and data is text
    $plainArray = json_decode($plainText, true); //now text data convert array 
    $username = $plainArray['username'];
    session_start();
    $_SESSION['username'] = $username;
    echo "Success";
}

//Read from session store (backend e data store )
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    session_start();
    echo $_SESSION['username'];
}


//Delete  from session store (backend e data store )
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {

    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo "Successfully delete ";
}
