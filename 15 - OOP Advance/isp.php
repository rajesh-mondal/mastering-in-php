<?php

interface Vehicle{
function getMileage();
function getName();
function getPrice();
}

interface TwoWheelers{

}

interface FourWheelers{

}

interface SixWheelers{

}

class MotorCycle implements Vehicle, TwoWheelers{
     
}

class Truck implements Vehicle, SixWheelers{

}