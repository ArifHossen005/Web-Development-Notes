<?php

/* Access Modifier 

public= 

private

protected


*/
//private =  use same class 
//public =  use all class / accessible everywhere
//protected =  (extended) class e use hobe only 





class MyHouse
{

    // My Wife 
    private  $Bou = "Angle Omuk";
    protected $NijerChele = "Bathas";
    public $KajerChele = "Akash";


    function demo()
    {
        echo $this->KajerChele;
    }
}


class MyShoshurHouse extends MyHouse
{

    function demo()
    {
        echo $this->KajerChele;
    }
}



class MyFriendsHouse
{

    function demo()
    {
        $obj = new MyHouse();
        $obj->KajerChele;
    }

    function demo2()
    {
        self::$kajerchele;
    }
}
