<?php


require_once 'Car.php';
$car = new Car('bleu',2 , 'essence');
$car2 = new Car('bleu',2 , 'essence');

var_dump($car2); // then, another dump.


echo $car2->start();


echo $car2->forward();

echo $car2->brake();
