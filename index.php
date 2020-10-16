<?php


require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1,6);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('green', 4, 'electric',15);
$truck1 = new Truck('green', 4, 'electric',10);
$truck2 = new Truck('green', 4, 'electric', 5);
$truck3 = new Truck('green', 4, 'electric',6);
$truck4 = new Truck('green', 4, 'electric',8);
$truck5 = new Truck('green', 4, 'electric',15);


var_dump($truck);

echo $truck1->forward();
echo $truck1->brake();
echo $truck1->checkcargo();