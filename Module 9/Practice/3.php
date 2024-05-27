<?php
//4 Public and Private Methods and Properties of Classes

class Fund
{
    public $fund;
    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }
    public function addFund($money)
    {
        $this->fund += $money;
    }

    public function deductFund($money)
    {
        $this->fund -= $money;
    }

    public function getTotal()
    {
        echo "Total Fund: " . $this->fund . "\n";
    }
}


$ourFund = new Fund(1000);
$ourFund->getTotal();
$ourFund->addFund(500);
$ourFund->getTotal();
$ourFund->deductFund(200);
$ourFund->getTotal();
