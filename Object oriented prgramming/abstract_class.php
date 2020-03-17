<?php


abstract class Vehicle {
    public abstract function getnoofWheel();

    public function getName() {
        return get_class($this);
    }
}

class Bus extends Vehicle {
    public function getnoofWheel() {
        return 4;
    }
}

class  Bicycle extends Vehicle {
    public function getnoofWheel() {
        return 2;
    }
}

function printNumWheels(Vehicle $v) {
    echo "A " . $v->getName() . " has " . $v->getnoofWheels() . " wheelsn";
}

$Bus1 = new Bus();
$Bicycle1 = new Bicycle();

printNumWheels($Bus1);
printNumWheels($Bicycle1);



/***Результат приведенного выше кода будет следующим***/



//A Bus has 4 wheels
//A Bicycle has 2 wheels
