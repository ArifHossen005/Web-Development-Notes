<?php
// error handle and exception


try {
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        include("connection.php");
        echo "Connected successfully";
    }
} catch (Exception $e) {
    echo $e;
}
