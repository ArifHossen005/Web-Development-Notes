<?php

// Constructor for inheritance  

class Father
{

    public function __construct()
    {
        echo " This is Father's Constructor";
    }
}




class Son extends Father
{

    public function __construct()
    {
        echo " This is Son's Constructor";
    }
}



$objSon = new Son();
