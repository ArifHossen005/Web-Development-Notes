<?php

//parent keyword
// parent keyword= উত্তরাধিকার ক্ষমতা ব্যবহার করে অব্জেক্ট তৈরি ছাড়াই সরাসরি কোনো প্রপারটিস একসেস করা 

class Father
{
    public function print100()
    {
        for ($i = 0; $i < 10; $i++) {
            echo $i . "\n";
        }
    }
}

class Son extends Father
{
    public function demo()
    {
        parent::print100();
    }
}

$SonObj =  new Son();
$SonObj->demo();
