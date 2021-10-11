<?php
require 'Bicycle.php';
require 'Car.php';

$bike = new Bicycle ();
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);
$bike->dump();

echo "**********************************************************************";

$ferrari = new Car ("blue", "2", "diesel");
var_dump($ferrari);

echo $ferrari->start() . '<br>';
echo $ferrari->getCurrentSpeed() . '<br>';
echo $ferrari->forward() . '<br>';
echo $ferrari->getCurrentSpeed() . '<br>';
echo $ferrari->brake() . '<br>';
echo $ferrari->getCurrentSpeed() . '<br>';
echo "******";

?>