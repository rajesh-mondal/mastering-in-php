<?php

class SpaceShuttle{
    function powerOn(){
        echo "Power On\n";
    }

    function checkTempreture(){
        echo "Tempreture Ok\n";
    }

    function checkFuel(){
        echo "Fuel Ok\n";
    }

    function startEngine(){
        echo "Engine Started\n";
    }

    function startThrusters(){
        echo "Bye Bye";
    }
}

class SpaceShuttleFacade{
    private $shuttle;
    function __construct(SpaceShuttle $shuttle){
        $this->shuttle= $shuttle;
    }

    function takeOff(){
        $this->shuttle->powerOn();
        $this->shuttle->checkTempreture();
        $this->shuttle->checkFuel();
        $this->shuttle->startEngine();
        $this->shuttle->startThrusters();
    }
}

$ss = new SpaceShuttle();

$ssf = new SpaceShuttleFacade($ss);
$ssf->takeOff();