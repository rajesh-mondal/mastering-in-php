<?php
//Class Public, Private Method and Propertise
class fund {
    private $fund;

    function __construct( $initialFund = 0 ) {
        $this->fund = $initialFund;
    }
    public function addFund( $money ) {
        $this->fund += $money;
    }

    public function deductFund( $money ) {
        $this->fund -= $money;
    }

    public function getTotal() {
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new fund( 100 );
$ourFund->getTotal();
$ourFund->deductFund( 7 );
$ourFund->getTotal();
