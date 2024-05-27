<?php
//1 (File) Reading data from files
$fileName = "F:/Web development Practice/Module 11/data/f1.txt";

if (is_readable($fileName)) {
    $fp = fopen($fileName, 'r');

    $line = fgets($fp);
    echo $line;
    $line = fgets($fp);
    echo $line;
    $line = fgets($fp);
    echo $line;

    // want ot full file read
    while ($line = fgets($fp)) {
        echo $line;
    }
    rewind($fp); // mane abr shuru theke asbe 

    while ($line = fgets($fp)) {
        echo $line;
    }
    fseek($fp, 8); //specific jayga theke asbe 
    while ($line = fgets($fp)) {
        echo $line, "-";
    }


    //all file read treat by array  file($fileName);
    $data = file($fileName);
    print_r($data);
    echo $data[2];

    //file_get_contents  etao all data read but not array
    $data = file_get_contents($fileName);
    echo $data;
    fclose($fp);
}
