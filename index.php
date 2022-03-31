<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

var_dump(Car::ALLOWED_ENERGIES);

$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();

var_dump($bicycle);

$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);

// Instanciation d'un nouvel objet classe Car $deuxChevaux
$deuxChevaux = new Car('white', 4, 'fuel');

var_dump($deuxChevaux);

if (isset($deuxChevaux->nbWheels)) {
    echo $deuxChevaux->getNbWheels();
}

echo $deuxChevaux->start();
echo $deuxChevaux->forward();
var_dump($deuxChevaux);
echo $deuxChevaux->brake();
var_dump($deuxChevaux);

// Instanciation d'un nouvel objet classe Car $mini
$mini = new Car('green', 4, 'electric');

// Instanciation d'un nouvel objet $bike

$bike = new Bicycle('blue', 2);

var_dump($bike);

$bike->setCurrentSpeed(0);

var_dump($bike);

// Moving bike

echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

var_dump($bike);

// Instanciation d'un nouvel objet $rockrider

$rockrider = new Bicycle('yellow', 2);

// Instanciation d'un nouvel objet $tornado

$tornado = new Bicycle('black', 2);

$tornado->forward();
