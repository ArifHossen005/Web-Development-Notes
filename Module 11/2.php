<?php
//2 (File) Writing and Appending Data to Files
$fileName = "F:/Web development Practice/Module 11/data/f2.txt";
$existingData  = file_get_contents($fileName); //mane age ami read kore rakhlam all data jeno delete na hoi

$fp = fopen($fileName, 'w'); // w means ager file kete diye notun kore file entry dibe  
fwrite($fp, $existingData); //ager data gulu rekhe dilam jeno delete na hoi 
fwrite($fp, "World\n");
fwrite($fp, "venus\n");
fwrite($fp, "mars\n");
// w use na kore (a ) means append use kora valo ,tahole ager data read kora lagbe nah 