<?php
require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';

/*$bike = new Bicycle('red', 1);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);


echo "**********************************************************************";

$ferrari = new Car ("blue", "2", "GPL");
var_dump($ferrari);

echo $ferrari->start() . '<br>';
echo $ferrari->getCurrentSpeed() . '<br>';
echo $ferrari->forward() . '<br>';
echo $ferrari->getCurrentSpeed() . '<br>';
echo $ferrari->brake() . '<br>';
echo $ferrari->getCurrentSpeed() . '<br>';

echo "**********************************************************************";*/

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('red', 2, 'fuel', 100, 00 );
var_dump($truck);

echo $truck->forward() . '<br>';
echo $truck->brake() . '<br>';
echo $truck->full() . '<br>';

echo $truck->setLoading(100) . '<br>';
echo $truck->getLoading() . '<br>';
echo $truck->full() . '<br>';