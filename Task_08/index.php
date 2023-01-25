<?php

require_once 'Car.php';
require_once 'User.php';

$user = new User('Erick', 25);
var_dump($user->name);
var_dump($user->age);

$car = new Car('white', 200);
var_dump($car->color);
var_dump($car->price);